INSERT INTO donor (first_name, last_name, donor_address, city, state, zip_code, email, phone)
VALUES
('Dayle', 'MacGilmartin', '185 Mammoth Rd', 'Manchester', 'NH', '03104', 'dmacgilmartin0@theatlantic.com', '6111664196'),
('Brian', 'Allen', '17 Misty Lane', 'Hooksett', 'NH', '03106', 'ballen345@gmail.com', '6035406785'),
('Shayla', 'Joy', '1 Locust Lane', 'Manchester', 'NH', '03103', 'sjj123@wildcats.unh.edu', '6032324503');

INSERT INTO blood_info (donor_id, blood_type, plasma_donation, date_of_donation)
VALUES
('1', 'A+', 'NO', '2/5/2021'),
('2', 'O-', 'YES', '12/20/2020'),
('3', 'B+', 'NO', '3/5/2021');