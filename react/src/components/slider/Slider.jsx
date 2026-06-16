import { useEffect, useRef } from 'react';
import { imageBaseUrl } from '../../config.js';
import { products } from '../../data/products.js';

function Slider({ drag = false }) {
  const trackRef = useRef(null);
  const thumbRef = useRef(null);
  const scrollbarRef = useRef(null);

  useEffect(() => {
    const track = trackRef.current;
    const thumb = thumbRef.current;
    const scrollbar = scrollbarRef.current;

    if (!track || !thumb || !scrollbar) {
      return undefined;
    }

    let draggingThumb = false;
    let thumbStartX = 0;
    let thumbStartLeft = 0;
    let draggingTrack = false;
    let trackStartX = 0;
    let trackStartLeft = 0;
    const maxScroll = () => track.scrollWidth - track.clientWidth;

    function updateThumb() {
      const visibleRatio = track.clientWidth / track.scrollWidth;
      const thumbWidth = Math.max(scrollbar.clientWidth * visibleRatio, 42);
      const maxThumb = scrollbar.clientWidth - thumbWidth;
      const ratio = maxScroll() > 0 ? track.scrollLeft / maxScroll() : 0;
      thumb.style.width = `${thumbWidth}px`;
      thumb.style.transform = `translateX(${ratio * maxThumb}px)`;
    }

    function onWheel(event) {
      if (Math.abs(event.deltaY) <= Math.abs(event.deltaX)) {
        return;
      }
      event.preventDefault();
      track.scrollLeft += event.deltaY;
    }

    function onThumbDown(event) {
      draggingThumb = true;
      thumbStartX = event.clientX;
      thumbStartLeft = track.scrollLeft;
      thumb.setPointerCapture(event.pointerId);
    }

    function onThumbMove(event) {
      if (!draggingThumb) {
        return;
      }
      const maxThumb = scrollbar.clientWidth - thumb.offsetWidth;
      const delta = event.clientX - thumbStartX;
      track.scrollLeft = thumbStartLeft + (maxThumb > 0 ? (delta / maxThumb) * maxScroll() : 0);
    }

    function onThumbUp(event) {
      draggingThumb = false;
      if (thumb.hasPointerCapture(event.pointerId)) {
        thumb.releasePointerCapture(event.pointerId);
      }
    }

    function onScrollbarDown(event) {
      if (event.target === thumb) {
        return;
      }
      const rect = scrollbar.getBoundingClientRect();
      track.scrollLeft = ((event.clientX - rect.left) / rect.width) * maxScroll();
    }

    function onTrackDown(event) {
      if (!drag) {
        return;
      }
      draggingTrack = true;
      trackStartX = event.clientX;
      trackStartLeft = track.scrollLeft;
      track.classList.add('is-dragging');
      track.setPointerCapture(event.pointerId);
    }

    function onTrackMove(event) {
      if (draggingTrack) {
        track.scrollLeft = trackStartLeft - (event.clientX - trackStartX);
      }
    }

    function onTrackUp(event) {
      draggingTrack = false;
      track.classList.remove('is-dragging');
      if (track.hasPointerCapture(event.pointerId)) {
        track.releasePointerCapture(event.pointerId);
      }
    }

    track.addEventListener('wheel', onWheel, { passive: false });
    track.addEventListener('scroll', updateThumb, { passive: true });
    thumb.addEventListener('pointerdown', onThumbDown);
    thumb.addEventListener('pointermove', onThumbMove);
    thumb.addEventListener('pointerup', onThumbUp);
    thumb.addEventListener('pointercancel', onThumbUp);
    scrollbar.addEventListener('pointerdown', onScrollbarDown);
    track.addEventListener('pointerdown', onTrackDown);
    track.addEventListener('pointermove', onTrackMove);
    track.addEventListener('pointerup', onTrackUp);
    track.addEventListener('pointercancel', onTrackUp);
    window.addEventListener('resize', updateThumb);
    updateThumb();

    return () => {
      track.removeEventListener('wheel', onWheel);
      track.removeEventListener('scroll', updateThumb);
      thumb.removeEventListener('pointerdown', onThumbDown);
      thumb.removeEventListener('pointermove', onThumbMove);
      thumb.removeEventListener('pointerup', onThumbUp);
      thumb.removeEventListener('pointercancel', onThumbUp);
      scrollbar.removeEventListener('pointerdown', onScrollbarDown);
      track.removeEventListener('pointerdown', onTrackDown);
      track.removeEventListener('pointermove', onTrackMove);
      track.removeEventListener('pointerup', onTrackUp);
      track.removeEventListener('pointercancel', onTrackUp);
      window.removeEventListener('resize', updateThumb);
    };
  }, [drag]);

  return (
    <div className="slider-track">
      <div ref={trackRef} className={`slider-track__list${drag ? ' slider-track__list--drag' : ''}`} tabIndex="0" aria-label="Товары">
        {products.map(([image, title]) => (
          <article key={`${image}-${title}`} className="product-card">
            <img className="product-card__image" src={`${imageBaseUrl}/${image}`} alt={title} draggable="false" />
            <h3>{title}</h3>
          </article>
        ))}
      </div>
      <div ref={scrollbarRef} className="slider-scrollbar" aria-hidden="true">
        <span ref={thumbRef} />
      </div>
    </div>
  );
}

export { Slider };
