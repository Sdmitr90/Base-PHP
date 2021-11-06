DROP database if exists hw;
create database hw;

use hw;

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(1, 'Игорь', 'Это самый крутой отзыв на данную домашку.'),
(2, 'Дмитрий', 'Здесь нет ничего лишнего.'),
(3, 'Александр', 'Только код по указанным заданиям.'),
(4, 'Сергей', 'Чтобы не взрывать мозг преподавателю.'),
(5, 'Петр', 'Спасибо за Внимание!).');

-- --------------------------------------------------------

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;