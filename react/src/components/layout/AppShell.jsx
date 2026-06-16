import { useState } from 'react';
import { Link, NavLink } from 'react-router-dom';
import { pages } from '../../data/navigation.js';

function AppShell({ route, children }) {
  const [menuOpen, setMenuOpen] = useState(false);

  return (
    <div className={`react-shell react-shell--${route}`}>
      <header className="react-shell__header">
        <div className="react-shell__header-inner">
          <Link className="react-shell__brand" to="/" onClick={() => setMenuOpen(false)}>ОфисМаг React</Link>
          <button
            className={`react-shell__menu${menuOpen ? ' is-open' : ''}`}
            type="button"
            aria-controls="react-navigation"
            aria-expanded={menuOpen}
            aria-label={menuOpen ? 'Закрыть меню' : 'Открыть меню'}
            onClick={() => setMenuOpen((open) => !open)}
          >
            <span />
            <span />
            <span />
          </button>
          <nav
            id="react-navigation"
            className={`react-shell__nav${menuOpen ? ' is-open' : ''}`}
            aria-label="Страницы React-версии"
          >
            {pages.map(([key, label]) => (
              <NavLink
                key={key}
                className={({ isActive }) => (isActive ? 'is-active' : '')}
                to={`/${key}`}
                onClick={() => setMenuOpen(false)}
              >
                {label}
              </NavLink>
            ))}
          </nav>
        </div>
      </header>
      {children}
    </div>
  );
}

export { AppShell };
