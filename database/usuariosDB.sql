INSERT INTO `role_users` (`id_rol`, `nameRol`, `created_at`, `updated_at`) VALUES
 (NULL, 'Admin', '2021-05-14 20:18:52', '2021-05-14 20:18:52'),
 (NULL, 'Funcionario', '2021-05-20 20:18:52', '2021-05-20 20:18:52');

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `rol_id`, `created_at`, `updated_at`)
 VALUES 
 (NULL, 'Guillermo', 'guillermo@gmail.com', NULL, '$2y$10$I26HIPECDIerRdA8LTeHCOMHs8hsG2XAQ6pCkcaTyt7qoEatxltp6', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL);

 INSERT INTO `distributors` (`nameDistributor`, `phone`, `direction`, `img`, `user_id`, `created_at`, `updated_at`) VALUES
( 'Huevos  AA', '3216549871', 'Pasto, Nariño', '', 1, '2021-05-03 23:40:28', '2021-05-04 01:57:10'),
( 'Huevos Oro', '3218618007', 'Pasto, Nariño', '', 1, '2021-05-04 00:51:33', '2021-05-04 01:57:27'),
('Huevos 44', '3216549871', 'Pasto, Nariño', '', 1, '2021-05-04 00:52:48', '2021-05-04 04:26:51'),
( 'Huevos AAA', '3216549874', 'Pasto, Nariño', '', 1, '2021-05-04 04:23:13', '2021-05-04 04:23:13'),
( 'Huevos Pasto', '321654987', 'Pasto, Nariño', '', 1, '2021-05-04 04:26:07', '2021-05-04 04:26:07');