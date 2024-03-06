-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 26.154.180.248:3306
-- Время создания: Мар 06 2024 г., 21:59
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hugevision`
--

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `idFilm` int NOT NULL,
  `nameFilm` varchar(100) NOT NULL,
  `countryFilm` varchar(20) NOT NULL,
  `genreFilm` varchar(20) NOT NULL,
  `durationFilm` varchar(20) NOT NULL,
  `descriptionFilm` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `posterFilm` varchar(250) NOT NULL,
  `trailerFilm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`idFilm`, `nameFilm`, `countryFilm`, `genreFilm`, `durationFilm`, `descriptionFilm`, `posterFilm`, `trailerFilm`) VALUES
(1, 'Такси', 'Франция', 'Комедия', '1 час 30 минут', 'Таксист Никита помешан на быстрой езде. Как ураган проносится он по извилистым улицам Нижнего Тагила на мощном ревущем «ВАЗ», пугая прохожих и приводя в ужас пассажиров. Начинающий следователь Макар вынуждает его помогать в поимке банды грабителей люков, каждый раз ускользающих от полиции на неуловимых «Тойотах».', 'public/testPoster.jpg', '../public/trailer-videos/test.mp4'),
(3, 'Бойцовский клуб', 'США', 'Триллер', '2 часа 19 минут', 'Сотрудник страховой компании страдает хронической бессонницей и отчаянно пытается вырваться из мучительно скучной жизни. Однажды в очередной командировке он встречает некоего Тайлера Дёрдена — харизматического торговца мылом с извращенной философией. Тайлер уверен, что самосовершенствование — удел слабых, а единственное, ради чего стоит жить, — саморазрушение.', 'public/fightClub.jpg', 'https://www.youtube.com/embed/C7-7qQ61QHU'),
(5, '1 + 1', 'Франция', 'Драма', '1 час 52 минуты', 'Пострадав в результате несчастного случая, богатый аристократ Филипп нанимает в помощники человека, который менее всего подходит для этой работы, – молодого жителя предместья Дрисса, только что освободившегося из тюрьмы. Несмотря на то, что Филипп прикован к инвалидному креслу, Дриссу удается привнести в размеренную жизнь аристократа дух приключений.', 'public/1+1.webp', 'https://www.youtube.com/embed/tTwFeGArcrs'),
(6, 'Кухня в Париже', 'Россия', 'Комедия', '1 час 46 минут', 'Модный столичный ресторан «Клод Моне» процветает. Именно здесь, в родном заведении Вика и Максим хотят отпраздновать долгожданную свадьбу. Но планы меняются, когда в ресторане назначают переговоры Президентов России и Франции! Команда ресторана терпит фиаско и вынуждена отправиться в «изгнание» – в Париж. Там Шеф с Максом сталкиваются с опасными конкурентами: Шеф – с ближайшим родственником, а Максим – с красавцем Николя, который кружит Вике голову не хуже искристого шампанского! ', 'public/kyxnya.webp', 'https://www.youtube.com/embed/cpuorLmctHA'),
(7, 'Волк с Уолл-стрит', 'США', 'Драма', '3 часа', 'Джордан Белфорт становится брокером в успешном инвестиционном банке. Вскоре банк закрывается после внезапного обвала индекса Доу-Джонса. По совету жены Терезы Джордан устраивается в небольшое заведение, занимающееся мелкими акциями. Его настойчивый стиль общения с клиентами и врождённая харизма быстро даёт свои плоды. Он знакомится с соседом по дому Донни, торговцем, который сразу находит общий язык с Джорданом и решает открыть с ним собственную фирму.', 'public/volk.webp', 'https://www.youtube.com/embed/CHivqmutR0I'),
(8, 'Человек-паук: Паутина вселенных', 'США', 'Мультфильм', '2 часа 20 минут', 'После воссоединения с Гвен Стейси дружелюбный сосед Человек-Паук попадает из Бруклина в Мультивселенную, где встречает команду Паучков, защищающих само её существование. Пытаясь справиться с новой угрозой, Майлз сталкивается с Пауками из других вселенных. Настаёт момент, когда ему необходимо решить, что значит быть героем, спасающим тех, кого любишь больше всего.', 'public/spiderMan.webp', 'https://www.youtube.com/embed/bCjPNuSTNbc'),
(9, 'Дэдпул и Росомаха', 'США', 'Фантастика', '2 часа 12 минут', 'Ведя тихий образ жизни, Уэйд Уилсон попадает в организацию «Управление временными изменениями» (УВИ), что заставляет его вернуться к альтер-эго Дэдпула и изменить историю «Кинематографической вселенной Marvel» с помощью Росомахи.', 'public/deadpool.jpg', 'https://www.youtube.com/embed/uJMCNJP2ipI'),
(10, 'Стражи Галактики. Часть 2', 'США', 'Фантастика', '2 часа 16 минут', 'Все в сборе: землянин Питер Квилл (Звездный Лорд), молчаливый громила Дракс, зеленокожая наемница Гамора, живое дерево Грут и говорящий енот. Герои не изменяют себе и с завидной регулярностью продолжают попадать в немыслимые ситуации, выпутываясь из них почти без ущерба (а иногда даже с пользой) для окружающих. На этот раз им предстоит раскрыть одну из самых главных тайн во всей Галактике: кто же на самом деле отец Питера Квилла?', 'public/strazhi.webp', 'https://www.youtube.com/embed/w5siIauNEw4?si=Nmgncq9kO3fYEgXo&amp;start=11');

-- --------------------------------------------------------

--
-- Структура таблицы `rentals`
--

CREATE TABLE `rentals` (
  `idRental` int NOT NULL,
  `idFilm` int NOT NULL,
  `statusRental` tinyint(1) NOT NULL,
  `startRental` date NOT NULL,
  `endRental` date NOT NULL,
  `priceTicket` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `rentals`
--

INSERT INTO `rentals` (`idRental`, `idFilm`, `statusRental`, `startRental`, `endRental`, `priceTicket`) VALUES
(1, 1, 1, '2024-03-01', '2024-03-31', 228),
(3, 3, 1, '2024-03-01', '2024-03-31', 300),
(5, 5, 1, '2024-03-01', '2024-03-31', 250),
(6, 6, 1, '2024-03-01', '2024-03-31', 150),
(7, 7, 1, '2024-03-01', '2024-03-31', 200),
(8, 8, 1, '2024-03-01', '2024-03-31', 250),
(9, 9, 1, '2024-03-01', '2024-03-31', 400),
(10, 10, 1, '2024-03-01', '2024-03-31', 150);

-- --------------------------------------------------------

--
-- Структура таблицы `tickets`
--

CREATE TABLE `tickets` (
  `idTicket` int NOT NULL,
  `idClient` int NOT NULL,
  `idRental` int NOT NULL,
  `rowSeat` int NOT NULL,
  `seat` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `idUser` int NOT NULL,
  `phoneUser` varchar(20) NOT NULL,
  `emailUser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`idFilm`);

--
-- Индексы таблицы `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`idRental`);

--
-- Индексы таблицы `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`idTicket`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `idFilm` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `rentals`
--
ALTER TABLE `rentals`
  MODIFY `idRental` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `tickets`
--
ALTER TABLE `tickets`
  MODIFY `idTicket` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
