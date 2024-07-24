CREATE TABLE bank_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    bank_name VARCHAR(255) NOT NULL,
    branch_name VARCHAR(255) NOT NULL,
    ifsc_code VARCHAR(11) NOT NULL
);
