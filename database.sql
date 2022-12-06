/*  New > Database Name "mackenthuns" > create      */

/*  To Create tables:    */

/* mackenthuns > new > SQL */

/* cake_order.php table */
/* 

CREATE TABLE orders (
    name VARCHAR(50) NOT NULL,
    flavor VARCHAR(50) NOT NULL,
    layers INTEGER NOT NULL
);

*/

/* catering_order.php table */
/* 

CREATE TABLE cater (
    odate VARCHAR(50) NOT NULL,
    gdate VARCHAR(50) NOT NULL,
    method VARCHAR(50) NOT NULL,
    location VARCHAR(50) NOT NULL,
    name VARCHAR(50) NOT NULL,
    time VARCHAR(50) NOT NULL,
    type VARCHAR(50) NOT NULL,
    putime VARCHAR(50) NOT NULL,
    phone VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    num INTEGER NOT NULL,
    meatball6 INTEGER NOT NULL,
    meatball12 INTEGER NOT NULL,
    club6 INTEGER NOT NULL,
    club12 INTEGER NOT NULL,
    blt6 INTEGER NOT NULL,
    blt12 INTEGER NOT NULL,
    box INTEGER NOT NULL,
    diet VARCHAR(50) NOT NULL
);

*/

/* insert_email.php table */
/* 

CREATE TABLE emails (
    email VARCHAR(50) NOT NULL
);


*/

/* signin.php table */
/* 

CREATE TABLE signin (
    emailaddress VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

*/