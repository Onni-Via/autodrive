
-- --------------------------------------------------------

--
-- Структура таблицы `equipment`
--

CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `groupName` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL COMMENT 'element'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
