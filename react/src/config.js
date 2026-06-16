const config = window.OfficeMagReactConfig || {};

function joinUrl(base, path) {
  const normalizedBase = base.length > 1 ? base.replace(/\/+$/, '') : base;
  const normalizedPath = path.replace(/^\/+/, '');

  return `${normalizedBase}/${normalizedPath}`;
}

export const routerBaseUrl = config.routerBaseUrl || '/react-app';
export const homeUrl = config.homeUrl || '/';
export const imageRootUrl = config.imageRootUrl || '/images';
export const imageBaseUrl = config.imageBaseUrl || joinUrl(imageRootUrl, 'showcase');
