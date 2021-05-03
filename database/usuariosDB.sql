INSERT INTO `role_users` (`id`, `nameRol`, `created_at`, `updated_at`) VALUES (NULL, 'Admin', '2021-05-14 20:18:52', '2021-05-14 20:18:52'), (NULL, 'Funcionario', '2021-05-20 20:18:52', '2021-05-20 20:18:52');

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `rol_id`, `created_at`, `updated_at`)
 VALUES 
 (NULL, 'admin', 'admin@gmail.com', NULL, '$2y$10$I26HIPECDIerRdA8LTeHCOMHs8hsG2XAQ6pCkcaTyt7qoEatxltp6', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL);