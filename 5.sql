CREATE TABLE cities (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(45) NULL,
  PRIMARY KEY (id));

CREATE TABLE biodata (
  id INT NOT NULL AUTO_INCREMENT,
  full_name VARCHAR(45) NULL,
  date_of_birth DATE NULL,
  place_of_birth_id INT NULL,
  phone_number VARCHAR(45) NULL,
  address TEXT NULL,
  last_education enum('sd', 'smp', 'slta', 's1'),
  religion enum('islam', 'katolik', 'kristen') default 'islam',
  hobby enum('renang', 'mancing', 'game', 'gibah', 'programming'),
  PRIMARY KEY (id),
  CONSTRAINT fk_place_of_birth_id
    FOREIGN KEY (place_of_birth_id)
    REFERENCES cities (id)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

INSERT INTO cities (name) VALUES ('Majalengka');
INSERT INTO cities (name) VALUES ('Cirebon');
INSERT INTO cities (name) VALUES ('Indramayu');

INSERT INTO biodata (full_name, date_of_birth, place_of_birth_id, phone_number, address, last_education, religion, hobby) 
VALUES ('Deden Nurdiansyah', '2001-03-18', '1', '0822222222', 'Majalengka', 'slta', 'islam', 'renang');

select b.id, b.full_name, c.name as city, b.phone_number, b.address, b.last_education, b.religion, b.hobby from biodata b left join cities c on c.id=b.place_of_birth_id;
