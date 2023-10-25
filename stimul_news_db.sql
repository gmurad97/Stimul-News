-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 25 2023 г., 05:34
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `stimul_news_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `branding`
--

CREATE TABLE `branding` (
  `b_uid` int NOT NULL,
  `b_data` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `branding`
--

INSERT INTO `branding` (`b_uid`, `b_data`) VALUES
(15, '{\"favicon\": {\"file_ext\": \".ico\", \"file_name\": \"c4e6aff8affe212c044a574cee962e6e.ico\", \"file_type\": \"image/vnd.microsoft.icon\"}, \"logo_dark\": {\"file_ext\": \".png\", \"file_name\": \"de1655a944c7c582cc04a154a240f8b5.png\", \"file_type\": \"image/png\", \"visibility\": true}, \"logo_light\": {\"file_ext\": \".png\", \"file_name\": \"1e4b4efa21bbbcd8bdb6bf65ba2f224c.png\", \"file_type\": \"image/png\", \"visibility\": true}, \"title_prefix\": \"U3RpbXVsIE5ld3M=\"}');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `c_uid` int NOT NULL,
  `c_data` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`c_uid`, `c_data`) VALUES
(14, '{\"category_img\": \"c2bc32816cebd0085fa2dd84ef91d04a.jpg\", \"category_name\": {\"az\": \"SMmZeWF0IHTJmXJ6aQ==\", \"en\": \"TGlmZSBTdHlsZQ==\", \"ru\": \"0KHRgtC40LvRjCDQttC40LfQvdC4\"}, \"category_status\": true, \"category_bg_color\": \"#c90076\"}'),
(15, '{\"category_img\": \"e15cea1a937363ad6f32f9117ac54869.jpg\", \"category_name\": {\"az\": \"Rm90b3FyYWZpeWE=\", \"en\": \"UGhvdG9ncmFwaHk=\", \"ru\": \"0KTQvtGC0L7Qs9GA0LDRhNC40Y8=\"}, \"category_status\": true, \"category_bg_color\": \"#2986cc\"}');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `n_uid` int NOT NULL,
  `n_data` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`n_uid`, `n_data`) VALUES
(86, '{\"news_full\": {\"az\": \"PHA+0J/RgNC+0LbQuNCy0LDRjtGJ0LDRjyDQsiDQsNC30LXRgNCx0LDQudC00LbQsNC90YHQutC+0Lwg0KXQsNC90LrQtdC90LTQuCDQm9C40LvQuNGPINCX0LXQvNGG0L7QstCwINGA0LDQtNCwINGC0L7QvNGDLCDRh9GC0L4g0YHQtdC/0LDRgNCw0YLQuNGB0YLRiyDQv9C+0LrQuNC90YPQu9C4INGN0YLQvtGCINGA0LXQs9C40L7QvS48L3A+DQoNCjxwPtCe0LEg0Y3RgtC+0Lwg0L7QvdCwINC30LDRj9Cy0LjQu9CwINCe0LHRidC10YHRgtCy0LXQvdC90L7QvNGDINGC0LXQu9C10LLQuNC00LXQvdC40Y4g0JDQt9C10YDQsdCw0LnQtNC20LDQvdCwICjEsFRWKS48L3A+DQoNCjxwPtCW0LXQvdGJ0LjQvdCwINC/0YDQuNC30L3QsNC70LDRgdGMLCDRh9GC0L4g0LIg0L3QsNGB0YLQvtGP0YnQtdC1INCy0YDQtdC80Y8g0LTQvtCy0L7Qu9GM0L3QsCDRgdCy0L7QtdC5INC20LjQt9C90YzRji48L3A+DQoNCjxwPtCbLtCX0LXQvNGG0L7QstCwINGC0LDQutC20LUg0LLRi9GA0LDQt9C40LvQsCZuYnNwO9Cx0LvQsNCz0L7QtNCw0YDQvdC+0YHRgtGMINGB0L7RgtGA0YPQtNC90LjQutCw0Lwg0LDQt9C10YDQsdCw0LnQtNC20LDQvdGB0LrQvtC5Jm5ic3A70L/QvtC70LjRhtC40LguPC9wPg0KDQo8cD7Qn9GA0LXQtNGB0YLQsNCy0LvRj9C10Lwg0LTQsNC90L3Ri9C1INC60LDQtNGA0Ys6PC9wPg0KDQo8cD48aWZyYW1lIGZyYW1lYm9yZGVyPSIwIiBoZWlnaHQ9IjMxNSIgc2FuZGJveD0iIiBzcmM9Imh0dHBzOi8vd3d3LnlvdXR1YmUuY29tL2VtYmVkL3VWMFZxWDFuQ0prP3NpPW9OOXhhZ1Z3ZHh1UTVqSW4iIHRpdGxlPSJZb3VUdWJlIHZpZGVvIHBsYXllciIgd2lkdGg9IjU2MCI+PC9pZnJhbWU+PC9wPg0K\", \"en\": \"PHA+0J/RgNC+0LbQuNCy0LDRjtGJ0LDRjyDQsiDQsNC30LXRgNCx0LDQudC00LbQsNC90YHQutC+0Lwg0KXQsNC90LrQtdC90LTQuCDQm9C40LvQuNGPINCX0LXQvNGG0L7QstCwINGA0LDQtNCwINGC0L7QvNGDLCDRh9GC0L4g0YHQtdC/0LDRgNCw0YLQuNGB0YLRiyDQv9C+0LrQuNC90YPQu9C4INGN0YLQvtGCINGA0LXQs9C40L7QvS48L3A+DQoNCjxwPtCe0LEg0Y3RgtC+0Lwg0L7QvdCwINC30LDRj9Cy0LjQu9CwINCe0LHRidC10YHRgtCy0LXQvdC90L7QvNGDINGC0LXQu9C10LLQuNC00LXQvdC40Y4g0JDQt9C10YDQsdCw0LnQtNC20LDQvdCwICjEsFRWKS48L3A+DQoNCjxwPtCW0LXQvdGJ0LjQvdCwINC/0YDQuNC30L3QsNC70LDRgdGMLCDRh9GC0L4g0LIg0L3QsNGB0YLQvtGP0YnQtdC1INCy0YDQtdC80Y8g0LTQvtCy0L7Qu9GM0L3QsCDRgdCy0L7QtdC5INC20LjQt9C90YzRji48L3A+DQoNCjxwPtCbLtCX0LXQvNGG0L7QstCwINGC0LDQutC20LUg0LLRi9GA0LDQt9C40LvQsCZuYnNwO9Cx0LvQsNCz0L7QtNCw0YDQvdC+0YHRgtGMINGB0L7RgtGA0YPQtNC90LjQutCw0Lwg0LDQt9C10YDQsdCw0LnQtNC20LDQvdGB0LrQvtC5Jm5ic3A70L/QvtC70LjRhtC40LguPC9wPg0KDQo8cD7Qn9GA0LXQtNGB0YLQsNCy0LvRj9C10Lwg0LTQsNC90L3Ri9C1INC60LDQtNGA0Ys6PC9wPg0KDQo8cD48aWZyYW1lIGZyYW1lYm9yZGVyPSIwIiBoZWlnaHQ9IjMxNSIgc2FuZGJveD0iIiBzcmM9Imh0dHBzOi8vd3d3LnlvdXR1YmUuY29tL2VtYmVkL3VWMFZxWDFuQ0prP3NpPW9OOXhhZ1Z3ZHh1UTVqSW4iIHRpdGxlPSJZb3VUdWJlIHZpZGVvIHBsYXllciIgd2lkdGg9IjU2MCI+PC9pZnJhbWU+PC9wPg0K\", \"ru\": \"PHA+0J/RgNC+0LbQuNCy0LDRjtGJ0LDRjyDQsiDQsNC30LXRgNCx0LDQudC00LbQsNC90YHQutC+0Lwg0KXQsNC90LrQtdC90LTQuCDQm9C40LvQuNGPINCX0LXQvNGG0L7QstCwINGA0LDQtNCwINGC0L7QvNGDLCDRh9GC0L4g0YHQtdC/0LDRgNCw0YLQuNGB0YLRiyDQv9C+0LrQuNC90YPQu9C4INGN0YLQvtGCINGA0LXQs9C40L7QvS48L3A+DQoNCjxwPtCe0LEg0Y3RgtC+0Lwg0L7QvdCwINC30LDRj9Cy0LjQu9CwINCe0LHRidC10YHRgtCy0LXQvdC90L7QvNGDINGC0LXQu9C10LLQuNC00LXQvdC40Y4g0JDQt9C10YDQsdCw0LnQtNC20LDQvdCwICjEsFRWKS48L3A+DQoNCjxwPtCW0LXQvdGJ0LjQvdCwINC/0YDQuNC30L3QsNC70LDRgdGMLCDRh9GC0L4g0LIg0L3QsNGB0YLQvtGP0YnQtdC1INCy0YDQtdC80Y8g0LTQvtCy0L7Qu9GM0L3QsCDRgdCy0L7QtdC5INC20LjQt9C90YzRji48L3A+DQoNCjxwPtCbLtCX0LXQvNGG0L7QstCwINGC0LDQutC20LUg0LLRi9GA0LDQt9C40LvQsCZuYnNwO9Cx0LvQsNCz0L7QtNCw0YDQvdC+0YHRgtGMINGB0L7RgtGA0YPQtNC90LjQutCw0Lwg0LDQt9C10YDQsdCw0LnQtNC20LDQvdGB0LrQvtC5Jm5ic3A70L/QvtC70LjRhtC40LguPC9wPg0KDQo8cD7Qn9GA0LXQtNGB0YLQsNCy0LvRj9C10Lwg0LTQsNC90L3Ri9C1INC60LDQtNGA0Ys6PC9wPg0KDQo8cD48aWZyYW1lIGZyYW1lYm9yZGVyPSIwIiBoZWlnaHQ9IjMxNSIgc2FuZGJveD0iIiBzcmM9Imh0dHBzOi8vd3d3LnlvdXR1YmUuY29tL2VtYmVkL3VWMFZxWDFuQ0prP3NpPW9OOXhhZ1Z3ZHh1UTVqSW4iIHRpdGxlPSJZb3VUdWJlIHZpZGVvIHBsYXllciIgd2lkdGg9IjU2MCI+PC9pZnJhbWU+PC9wPg0K\"}, \"news_short\": {\"az\": \"0J/RgNC+0LbQuNCy0LDRjtGJ0LDRjyDQsiDQpdCw0L3QutC10L3QtNC4INCb0LjQu9C40Y8g0JfQtdC80YbQvtCy0LAg0YDQsNC00YPQtdGC0YHRjyDQstC+0LfQstGA0LDRidC10L3QuNGOINCw0LfQtdGA0LHQsNC50LTQttCw0L3RhtC10LIg\", \"en\": \"0J/RgNC+0LbQuNCy0LDRjtGJ0LDRjyDQsiDQpdCw0L3QutC10L3QtNC4INCb0LjQu9C40Y8g0JfQtdC80YbQvtCy0LAg0YDQsNC00YPQtdGC0YHRjyDQstC+0LfQstGA0LDRidC10L3QuNGOINCw0LfQtdGA0LHQsNC50LTQttCw0L3RhtC10LIg\", \"ru\": \"0J/RgNC+0LbQuNCy0LDRjtGJ0LDRjyDQsiDQpdCw0L3QutC10L3QtNC4INCb0LjQu9C40Y8g0JfQtdC80YbQvtCy0LAg0YDQsNC00YPQtdGC0YHRjyDQstC+0LfQstGA0LDRidC10L3QuNGOINCw0LfQtdGA0LHQsNC50LTQttCw0L3RhtC10LIg\"}, \"news_title\": {\"az\": \"0J/RgNC+0LbQuNCy0LDRjtGJ0LDRjyDQsiDQpdCw0L3QutC10L3QtNC4INCb0LjQu9C40Y8g0JfQtdC80YbQvtCy0LAg0YDQsNC00YPQtdGC0YHRjyDQstC+0LfQstGA0LDRidC10L3QuNGOINCw0LfQtdGA0LHQsNC50LTQttCw0L3RhtC10LIg\", \"en\": \"0J/RgNC+0LbQuNCy0LDRjtGJ0LDRjyDQsiDQpdCw0L3QutC10L3QtNC4INCb0LjQu9C40Y8g0JfQtdC80YbQvtCy0LAg0YDQsNC00YPQtdGC0YHRjyDQstC+0LfQstGA0LDRidC10L3QuNGOINCw0LfQtdGA0LHQsNC50LTQttCw0L3RhtC10LIg\", \"ru\": \"0J/RgNC+0LbQuNCy0LDRjtGJ0LDRjyDQsiDQpdCw0L3QutC10L3QtNC4INCb0LjQu9C40Y8g0JfQtdC80YbQvtCy0LAg0YDQsNC00YPQtdGC0YHRjyDQstC+0LfQstGA0LDRidC10L3QuNGOINCw0LfQtdGA0LHQsNC50LTQttCw0L3RhtC10LIg\"}, \"news_status\": true, \"news_preview\": \"29ab6082b434e10a22b7404bccc6fd17.png\", \"news_category\": {\"az\": \"SMmZeWF0IHTJmXJ6aQ==\", \"en\": \"TGlmZSBTdHlsZQ==\", \"ru\": \"0KHRgtC40LvRjCDQttC40LfQvdC4\"}, \"news_created_date\": \"12.10.2023\", \"news_created_time\": \"04:56\", \"news_category_bg_color\": \"#c90076\"}');

-- --------------------------------------------------------

--
-- Структура таблицы `partners`
--

CREATE TABLE `partners` (
  `p_uid` int NOT NULL,
  `p_data` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `partners`
--

INSERT INTO `partners` (`p_uid`, `p_data`) VALUES
(30, '{\"partner_img\": \"b7d3d7b41b0f6dba4edbcb7a2cb47b14.png\", \"partner_link\": \"aHR0cHM6Ly9zb2Nhci5hei8=\", \"partner_title\": \"U29jYXIgQVo=\", \"partner_status\": true}'),
(31, '{\"partner_img\": \"48eb13655373735e0c853693c5a6c924.png\", \"partner_link\": \"aHR0cHM6Ly9sdWtvaWwuYXov\", \"partner_title\": \"THVrb2lsIEFa\", \"partner_status\": true}'),
(32, '{\"partner_img\": \"d36cb2856c35b8caeb105a826bd6d83f.png\", \"partner_link\": \"aHR0cHM6Ly9tYXJjb3BvbG9tYXJpbmUuY29tLnNnLw==\", \"partner_title\": \"TWFyY28gUG9sbyBNYXJpbmU=\", \"partner_status\": false}'),
(33, '{\"partner_img\": \"4c6201a116c54b9de98403949441c73e.png\", \"partner_link\": \"aHR0cHM6Ly90dXJrbWVucGV0cm9sZXVtLmNvbS8=\", \"partner_title\": \"VHVya21lbiBQZXRyb2xldW0=\", \"partner_status\": false}');

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `s_uid` int NOT NULL,
  `s_data` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`s_uid`, `s_data`) VALUES
(2, '{\"slider_info\": {\"slider_uid\": \"86\", \"slider_status\": true}, \"slider_type\": \"slider_news\"}'),
(4, '{\"slider_info\": {\"slider_img\": \"d5152c1c00b7eed2ca6d96f831c48a42.ico\", \"slider_status\": true, \"slider_large_text\": \"aaaaa\", \"slider_small_text\": \"bbbbbb\", \"slider_large_text_color\": \"#AAaa00\", \"slider_small_text_color\": \"#bbaa00\"}, \"slider_type\": \"slider_custom\"}');

-- --------------------------------------------------------

--
-- Структура таблицы `subscribers`
--

CREATE TABLE `subscribers` (
  `s_uid` int NOT NULL,
  `s_data` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `subscribers`
--

INSERT INTO `subscribers` (`s_uid`, `s_data`) VALUES
(15, '{\"subscriber\": {\"email\": \"bXVyYWQuZGV2QGJrLnJ1\", \"status\": true}}'),
(16, '{\"subscriber\": {\"email\": \"dnZ4YWtlcnZ2QGJrLnJ1\", \"status\": true}}'),
(17, '{\"subscriber\": {\"email\": \"YWd1cmJhbmZmQGdtYWlsLmNvbQ==\", \"status\": false}}');

-- --------------------------------------------------------

--
-- Структура таблицы `topbar`
--

CREATE TABLE `topbar` (
  `t_uid` int NOT NULL,
  `t_data` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `topbar`
--

INSERT INTO `topbar` (`t_uid`, `t_data`) VALUES
(6, '{\"topbar_date\": true, \"topbar_self\": true, \"topbar_time\": true, \"topbar_weather\": true}');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `branding`
--
ALTER TABLE `branding`
  ADD PRIMARY KEY (`b_uid`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_uid`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_uid`);

--
-- Индексы таблицы `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`p_uid`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`s_uid`);

--
-- Индексы таблицы `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`s_uid`);

--
-- Индексы таблицы `topbar`
--
ALTER TABLE `topbar`
  ADD PRIMARY KEY (`t_uid`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `branding`
--
ALTER TABLE `branding`
  MODIFY `b_uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `c_uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `n_uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT для таблицы `partners`
--
ALTER TABLE `partners`
  MODIFY `p_uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `s_uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `s_uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `topbar`
--
ALTER TABLE `topbar`
  MODIFY `t_uid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
