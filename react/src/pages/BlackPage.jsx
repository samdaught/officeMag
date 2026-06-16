import { Link } from 'react-router-dom';
import { imageRootUrl } from '../config.js';

const blackPageImageBaseUrl = `${imageRootUrl}/black-page`;
const webpSrcSet = [
  'pineapplepen-768.webp 768w',
  'pineapplepen-1280.webp 1280w',
  'pineapplepen-1920.webp 1920w'
].map((item) => `${blackPageImageBaseUrl}/${item}`).join(', ');
const jpgSrcSet = [
  'pineapplepen-768.jpg 768w',
  'pineapplepen-1280.jpg 1280w',
  'pineapplepen-1920.jpg 1920w'
].map((item) => `${blackPageImageBaseUrl}/${item}`).join(', ');

function BlackPage() {
  return (
    <section className="black-page black-page--react" aria-labelledby="react-black-page-title">
      <picture className="black-page__media">
        <source type="image/webp" srcSet={webpSrcSet} sizes="100vw" />
        <source type="image/jpeg" srcSet={jpgSrcSet} sizes="100vw" />
        <img src={`${blackPageImageBaseUrl}/pineapplepen-1280.jpg`} width="1280" height="652" alt="Силуэт человека в поле на закате" decoding="async" fetchPriority="high" />
      </picture>
      <div className="black-page__content">
        <h1 id="react-black-page-title">Pineapplepen</h1>
        <p>Вам нужно будет постараться, чтобы забыть то, что вы здесь увидите.</p>
      </div>
      <footer className="black-page__footer">
        <p>Невероятный личный опыт и восхитительное удовольствие.</p>
        <Link to="/black-page">Pineapplepen</Link>
      </footer>
    </section>
  );
}

export { BlackPage };
