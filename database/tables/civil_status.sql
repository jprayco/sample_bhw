
INSERT INTO `civil_statuses` (`id`, `civil_status`) VALUES
(1, 'Single'),
(2, 'Married'),
(3, 'Widowed'),
(4, 'Legally Separated');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `civil_status`
--
ALTER TABLE `civil_statuses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `civil_status`
--
ALTER TABLE `civil_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
