# OfficeMag — тестовое задание

Проект выполнен как тестовое задание для **ОфисМаг**. В репозитории представлены две реализации одного набора страниц:

- **Yii2-версия** — серверная реализация страниц на Yii2, PHP, HTML, CSS и JavaScript;
- **React-версия** — клиентская SPA-реализация на React, собранная через Vite;
- обе версии используют общий визуальный стиль, изображения и одинаковые демонстрационные разделы.

## Содержание

- [О проекте](#о-проекте)
- [Стек](#стек)
- [Функциональность](#функциональность)
- [Структура проекта](#структура-проекта)
- [Быстрый запуск через Docker](#быстрый-запуск-через-docker)
- [Локальный запуск без Docker](#локальный-запуск-без-docker)
- [React-сборка](#react-сборка)
- [Маршруты](#маршруты)
- [Команды](#команды)
- [Проверка кода и тесты](#проверка-кода-и-тесты)
- [Лицензия](#лицензия)

## О проекте

**OfficeMag** — демонстрационный проект, в котором один и тот же набор интерфейсных страниц реализован двумя способами:

1. через классическую серверную отрисовку на **Yii2**;
2. через компонентный подход на **React**.

Главная страница служит точкой входа и позволяет перейти к нужной версии проекта.

Проект показывает работу с:

- адаптивной HTML/CSS-вёрсткой;
- компонентным подходом;
- формами и валидацией;
- интерактивными элементами на JavaScript;
- React Router;
- сборкой React-приложения через Vite;
- интеграцией React-сборки внутрь Yii2-приложения.

## Стек

### Backend / SSR

- PHP 8.2+
- Yii2
- Yii2 Bootstrap 5
- Composer

### Frontend

- HTML5
- CSS3
- JavaScript
- React 18
- React Router DOM
- Vite

### Инфраструктура

- Docker
- Docker Compose
- Apache

## Функциональность

В проекте реализованы демонстрационные страницы:

- **Текст**;
- **Форма**;
- **Кнопки**;
- **Схема**;
- **Витрина**;
- **Переключатель**;
- **Красивая кнопка**;
- **Чёрная страница**;

## Структура проекта

```text
officeMag/
├── assets/              # Yii2 asset bundles
├── commands/            # консольные команды Yii2
├── config/              # конфигурация приложения
├── controllers/         # контроллеры Yii2
├── models/              # модели Yii2
├── react/               # исходники React-приложения
│   ├── src/
│   │   ├── components/  # React-компоненты
│   │   ├── data/        # данные для навигации и витрины
│   │   ├── pages/       # страницы React-версии
│   │   ├── App.jsx
│   │   └── main.jsx
│   └── index.html
├── runtime/             # runtime-файлы Yii2
├── tests/               # тесты Codeception
├── views/               # представления Yii2
│   ├── layouts/
│   ├── site/
│   └── yii2/
├── web/                 # публичная директория
│   ├── css/             # стили страниц
│   ├── images/          # изображения
│   ├── js/              # JavaScript для Yii2-версии
│   ├── react-app/       # собранная React-версия
│   └── index.php
├── composer.json
├── docker-compose.yml
├── package.json
├── vite.config.js
└── Makefile
```

## Быстрый запуск через Docker

Клонируйте репозиторий:

```bash
git clone https://github.com/samdaught/officeMag.git
cd officeMag
```

Установите PHP-зависимости:

```bash
docker compose run --rm php composer install
```

Установите Node.js-зависимости:

```bash
npm install
```

Соберите React-приложение:

```bash
npm run react:build
```

Запустите контейнер:

```bash
docker compose up -d
```

После запуска проект будет доступен по адресу:

```text
http://localhost/
```

Остановить контейнер можно командой:

```bash
docker compose down
```

## Локальный запуск без Docker

Установите PHP-зависимости:

```bash
composer install
```

Установите Node.js-зависимости:

```bash
npm install
```

Соберите React-приложение:

```bash
npm run react:build
```

Запустите встроенный PHP-сервер из корня проекта:

```bash
php yii serve
```

Обычно приложение будет доступно по адресу:

```text
http://localhost:8080/
```

## React-сборка

Исходники React-приложения находятся в директории `react/`.

Для режима разработки:

```bash
npm run react:dev
```

Для production-сборки:

```bash
npm run react:build
```

Собранные файлы попадают в директорию:

```text
web/react-app/
```

Yii2 подключает эту сборку на странице React-версии.

## Маршруты

Основные точки входа:

```text
/        # главная страница проекта
/yii2    # Yii2-версия
/react   # React-версия
```

Страницы Yii2-версии:

```text
/yii2/text
/yii2/form
/yii2/buttons
/yii2/scheme
/yii2/slider
/yii2/toggle
/yii2/beauty
/yii2/black-page
```

React-версия использует клиентскую маршрутизацию через React Router.

## Команды

В проекте есть `Makefile` с короткими командами:

```bash
make up        # запустить Docker-контейнеры
make down      # остановить Docker-контейнеры
make restart   # перезапустить Docker-контейнеры
make react     # собрать React-приложение
```

Также доступны npm-команды:

```bash
npm run react:dev      # запуск React в dev-режиме
npm run react:build    # сборка React-приложения
npm run react:preview  # предпросмотр React-сборки
```

И Composer-команды:

```bash
composer cs       # проверка code style
composer cs-fix   # автоисправление code style
composer static   # статический анализ PHPStan
composer tests    # запуск тестов Codeception
```

## Проверка кода и тесты

Запуск тестов:

```bash
composer tests
```

Запуск статического анализа:

```bash
composer static
```

Проверка стиля кода:

```bash
composer cs
```

Автоисправление стиля кода:

```bash
composer cs-fix
```

## Примечания по разработке

- При изменении React-исходников нужно заново выполнить `npm run react:build`, чтобы обновить файлы в `web/react-app/`.
- CSS для страниц вынесен в отдельные файлы внутри `web/css/`.
- JavaScript для Yii2-версии находится в `web/js/`.
- Публичной директорией приложения является `web/`.
