import { Navigate, Route, Routes, useLocation } from 'react-router-dom';
import { AppShell } from './components/layout/AppShell.jsx';
import { BeautyPage } from './pages/BeautyPage.jsx';
import { BlackPage } from './pages/BlackPage.jsx';
import { ButtonsPage } from './pages/ButtonsPage.jsx';
import { FormPage } from './pages/FormPage.jsx';
import { SchemePage } from './pages/SchemePage.jsx';
import { SliderPage } from './pages/SliderPage.jsx';
import { TextPage } from './pages/TextPage.jsx';
import { TogglePage } from './pages/TogglePage.jsx';
import { pages } from './data/navigation.js';

const pageComponents = {
  text: TextPage,
  form: FormPage,
  buttons: ButtonsPage,
  scheme: SchemePage,
  slider: SliderPage,
  toggle: TogglePage,
  beauty: BeautyPage,
  'black-page': BlackPage
};

function getRouteFromPath(pathname) {
  const route = pathname.replace(/^\/+/, '').split('/')[0] || 'text';
  return pages.some(([key]) => key === route) ? route : 'text';
}

function App() {
  const location = useLocation();
  const route = getRouteFromPath(location.pathname);

  return (
    <AppShell route={route}>
      <Routes>
        <Route index element={<Navigate to="text" replace />} />
        {Object.entries(pageComponents).map(([path, Page]) => (
          <Route key={path} path={path} element={<Page />} />
        ))}
        <Route path="*" element={<Navigate to="text" replace />} />
      </Routes>
    </AppShell>
  );
}

export { App };
