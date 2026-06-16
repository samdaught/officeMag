document.addEventListener('DOMContentLoaded', function () {
    Array.prototype.forEach.call(document.querySelectorAll('[data-slider]'), function (root) {
        var track = root.querySelector('[data-slider-track]');
        var scrollbar = root.querySelector('[data-slider-scrollbar]');
        var thumb = root.querySelector('[data-slider-thumb]');

        if (!track || !scrollbar || !thumb) {
            return;
        }

        var dragging = false;
        var dragStartX = 0;
        var dragStartLeft = 0;
        var trackDragging = false;
        var trackDragStartX = 0;
        var trackDragStartLeft = 0;

        function getMaxScroll() {
            return track.scrollWidth - track.clientWidth;
        }

        function getMaxThumb() {
            return scrollbar.clientWidth - thumb.offsetWidth;
        }

        function updateThumb() {
            var maxScroll = getMaxScroll();
            var visibleRatio = track.clientWidth / track.scrollWidth;
            var thumbWidth = Math.max(scrollbar.clientWidth * visibleRatio, 42);
            var maxThumb = scrollbar.clientWidth - thumbWidth;
            var scrollRatio = maxScroll > 0 ? track.scrollLeft / maxScroll : 0;

            thumb.style.width = thumbWidth + 'px';
            thumb.style.transform = 'translateX(' + (scrollRatio * maxThumb) + 'px)';
        }

        track.addEventListener('wheel', function (event) {
            if (Math.abs(event.deltaY) <= Math.abs(event.deltaX)) {
                return;
            }

            event.preventDefault();
            track.scrollLeft += event.deltaY;
        }, { passive: false });

        track.addEventListener('scroll', updateThumb, { passive: true });

        thumb.addEventListener('pointerdown', function (event) {
            dragging = true;
            dragStartX = event.clientX;
            dragStartLeft = track.scrollLeft;
            thumb.setPointerCapture(event.pointerId);
        });

        thumb.addEventListener('pointermove', function (event) {
            if (!dragging) {
                return;
            }

            var maxScroll = getMaxScroll();
            var maxThumb = getMaxThumb();
            var delta = event.clientX - dragStartX;
            var scrollDelta = maxThumb > 0 ? (delta / maxThumb) * maxScroll : 0;

            track.scrollLeft = dragStartLeft + scrollDelta;
        });

        thumb.addEventListener('pointerup', function (event) {
            dragging = false;
            if (thumb.hasPointerCapture(event.pointerId)) {
                thumb.releasePointerCapture(event.pointerId);
            }
        });

        thumb.addEventListener('pointercancel', function () {
            dragging = false;
        });

        scrollbar.addEventListener('pointerdown', function (event) {
            if (event.target === thumb) {
                return;
            }

            var rect = scrollbar.getBoundingClientRect();
            var targetRatio = (event.clientX - rect.left) / rect.width;
            track.scrollLeft = targetRatio * getMaxScroll();
        });

        if (root.hasAttribute('data-slider-drag')) {
            track.addEventListener('pointerdown', function (event) {
                trackDragging = true;
                trackDragStartX = event.clientX;
                trackDragStartLeft = track.scrollLeft;
                track.classList.add('is-dragging');
                track.setPointerCapture(event.pointerId);
            });

            track.addEventListener('pointermove', function (event) {
                if (!trackDragging) {
                    return;
                }

                var delta = event.clientX - trackDragStartX;
                track.scrollLeft = trackDragStartLeft - delta;
            });

            track.addEventListener('pointerup', function (event) {
                trackDragging = false;
                track.classList.remove('is-dragging');
                if (track.hasPointerCapture(event.pointerId)) {
                    track.releasePointerCapture(event.pointerId);
                }
            });

            track.addEventListener('pointercancel', function () {
                trackDragging = false;
                track.classList.remove('is-dragging');
            });
        }

        window.addEventListener('resize', updateThumb);
        updateThumb();
    });
});
