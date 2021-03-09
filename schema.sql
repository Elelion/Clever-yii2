CREATE DATABASE clever CHARACTER SET 'utf8';

-- NOTE: for home page --------------------------------------------------------

-- NOTE: slider on home page
CREATE TABLE slider (
    id INT AUTO_INCREMENT PRIMARY KEY,
    active BOOLEAN NOT NULL DEFAULT false,
    title VARCHAR(48),
    mini_description TEXT,
    full_description TEXT,
    img VARCHAR(255) NOT NULL DEFAULT 'none',
    img_type VARCHAR(16) NOT NULL DEFAULT 'image'
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;


-- NOTE: services on home page
CREATE TABLE services_home (
	id INT AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(48),
	description TEXT,
    img VARCHAR(255) NOT NULL DEFAULT 'none'
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;


-- NOTE: about on home page
CREATE TABLE about_home (
	id INT AUTO_INCREMENT PRIMARY KEY,
	chapter_id INT,
	title VARCHAR(64),
	mini_description TEXT,
	full_description TEXT,
	img VARCHAR(255)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;


-- NOTE: clients slider on home page
CREATE TABLE clients_slider_home (
    id INT AUTO_INCREMENT PRIMARY KEY,
    active BOOLEAN NOT NULL DEFAULT false,
    title VARCHAR(96),
    alt VARCHAR(96),
    img VARCHAR(255) NOT NULL DEFAULT 'none'
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;


-- NOTE: portfolio chapter ----------------------------------------------------

-- NOTE: portfolio images
CREATE TABLE portfolio_image(
    id INT AUTO_INCREMENT PRIMARY KEY,
    img VARCHAR(255) NOT NULL DEFAULT 'none',
    portfolio_id INT
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- NOTE: portfolio
CREATE TABLE portfolio (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type_portfolio VARCHAR(16),
    class VARCHAR(255),
    description TEXT
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
ALTER TABLE portfolio_image ADD FOREIGN KEY (portfolio_id) REFERENCES portfolio(id);


-- NOTE: catalog chapter ----------------------------------------------------

-- NOTE: groups for catalog (parent chapter), also used on the main page
CREATE TABLE catalog_group (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_group INT(8) DEFAULT 0,
    title VARCHAR(48) DEFAULT NULL,
    description TEXT,
    img VARCHAR(255) NOT NULL DEFAULT 'none',
    class VARCHAR(255),
    active tinyint(8) DEFAULT 0
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- NOTE: groups for catalog (parent chapter), also used on the main page
CREATE TABLE catalog_subgroup (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(48) DEFAULT NULL,
    description TEXT,
    img VARCHAR(255) NOT NULL DEFAULT 'none',
    class VARCHAR(255),
    link VARCHAR(255),
    active tinyint(8) DEFAULT 0,

    -- NOTE: link for catalog_group -> id_group
    group_id INT(8) DEFAULT 0
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- NOTE: child form the catalog_group -> catalog_subgroup
CREATE TABLE catalog_product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    alert VARCHAR(16),
    title VARCHAR(48),
    description TEXT,
    price DECIMAL(8) DEFAULT NULL,
    img VARCHAR(255) NOT NULL DEFAULT 'none',
    class VARCHAR(255) DEFAULT NULL,
    implementation_class VARCHAR(255),
    active tinyint(8) DEFAULT 1,

    -- NOTE: link for catalog_group -> id_group
    group_id INT(8) DEFAULT 0
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- NOTE: discounts from catalog
CREATE TABLE catalog_discount (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(48),
    description TEXT,
    full_description TEXT,
    deadline DATETIME NOT NULL DEFAULT NOW(),
    img VARCHAR(255) NOT NULL DEFAULT 'none',
    active tinyint(8) DEFAULT 0
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;







CREATE TABLE events (
	id INT AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(32),
	mini_description TEXT,
	full_description TEXT,
	image_file VARCHAR(255),
	active tinyint(8) DEFAULT 0,
	redirect TEXT
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;


CREATE TABLE users_access (
	id INT AUTO_INCREMENT PRIMARY KEY,
	access VARCHAR(32) NOT NULL
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;


# CREATE TABLE catalog_0 (
# 	id INT AUTO_INCREMENT PRIMARY KEY,
# 	title VARCHAR(256),
# 	price VARCHAR(8),
# 	description TEXT,
# 	image VARCHAR(255),
# 	sale TINYINT(1) NOT NULL DEFAULT 0,
# 	sales_hits TINYINT(1) NOT NULL DEFAULT 0
# )
# ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- **

#ALTER TABLE users ADD FOREIGN KEY (access_id) REFERENCES users_access(id);



-- NOTE: banner on home page --------------------------------------------------
CREATE TABLE banner (
     id INT AUTO_INCREMENT PRIMARY KEY,
     active BOOLEAN NOT NULL DEFAULT false,
     title VARCHAR(25),
     mini_description VARCHAR(50),
     full_description TEXT,
     img VARCHAR(255) NOT NULL DEFAULT 'none'
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- NOTE: catalog product ------------------------------------------------------
CREATE TABLE product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT(4),
    subcategory_id INT(4),
    article VARCHAR(12) DEFAULT 0,
    title VARCHAR(255),
    description TEXT,
    price decimal(8, 2) NOT NULL DEFAULT 0.00,
    price_old decimal(8, 2) NOT NULL DEFAULT 0.00,
    seo_description VARCHAR(255),
    seo_keywords VARCHAR(255),
    img VARCHAR(255) NOT NULL DEFAULT 'none',
    sale BOOLEAN NOT NULL DEFAULT false,
    hit BOOLEAN NOT NULL DEFAULT false
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- NOTE: orders ---------------------------------------------------------------
CREATE TABLE cart_order (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_product_id INT(8) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT NOW(),
    updated_at DATETIME NOT NULL DEFAULT NOW(),
    price float(8),
    status BOOLEAN NOT NULL DEFAULT false,
    name VARCHAR(128) NOT NULL,
    email VARCHAR(64) NOT NULL,
    phone VARCHAR(11) NOT NULL,
    note TEXT
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

CREATE TABLE cart_order_product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT(8),
    product_id INT(8),
    title VARCHAR(255),
    price decimal(6, 2),
    quantity VARCHAR(2)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
ALTER TABLE cart_order_product ADD FOREIGN KEY (product_id) REFERENCES product(id);

-- NOTE: alerts for user ------------------------------------------------------
CREATE TABLE alert_error (
	id INT AUTO_INCREMENT PRIMARY KEY,
	error_type VARCHAR(32),
	error_title VARCHAR(64),
	error_caption VARCHAR(128),
	error_description TEXT,
	timeout INT(2) NOT NULL DEFAULT 3
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- NOTE: users ----------------------------------------------------------------
CREATE TABLE users (
	id INT AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	created DATETIME NOT NULL DEFAULT NOW(),
	active BOOLEAN NOT NULL DEFAULT false,
	auth_key VARCHAR(256),
	token_value VARCHAR(256),
	token_lifetime DATE
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- NOTE: subscribe for clients ------------------------------------------------
CREATE TABLE subscribe (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT NOW()
)

-- NOTE: Job Vacancy for clients ----------------------------------------------
CREATE TABLE vacancy (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    salary decimal(8, 2) NOT NULL DEFAULT 0.00,
    requirements TEXT NOT NULL,
    education VARCHAR(255) NOT NULL,
    experience VARCHAR(255) NOT NULL,
    responsibilities TEXT,
    conditions TEXT,
    active tinyint(8) DEFAULT 0
)