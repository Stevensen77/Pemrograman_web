
    CREATE TABLE nego_chat(

        id_chat INT NOT NULL PRIMARY KEY AUTO_INCREMENT,

        idlahan VARCHAR(10) NOT NULL,

        userlahannya VARCHAR(50) NOT NULL,
		
		userpembelinya VARCHAR(50) NOT NULL,
		
		nego INT NOT NULL,
		
        created_pas DATETIME DEFAULT CURRENT_TIMESTAMP

    );

