# Insert data in the database with SQL Command

### Start a database

```
use m_16_e_com_db_design;
```

### To see add data from a table

```
SELECT * FROM m_16_e_com_db_design.product_wishes;
```

### Insert users data

```
/* =============
Insert users data
================ */

INSERT INTO users (name, email, email_verified_at, password, remember_token, created_at, updated_at) VALUES
('Jane Smith', 'jane.smith@example.com', NOW(), 'password456', 'token456', NOW(), NOW()),
('Alice Brown', 'alice.brown@example.com', NOW(), 'password789', 'token789', NOW(), NOW()),
('Bob Johnson', 'bob.johnson@example.com', NOW(), 'password101', 'token101', NOW(), NOW()),
('Charlie Williams', 'charlie.williams@example.com', NOW(), 'password112', 'token112', NOW(), NOW()),
('David Lee', 'david.lee@example.com', NOW(), 'password113', 'token113', NOW(), NOW()),
('Eve White', 'eve.white@example.com', NOW(), 'password114', 'token114', NOW(), NOW()),
('Frank Harris', 'frank.harris@example.com', NOW(), 'password115', 'token115', NOW(), NOW()),
('Grace Kim', 'grace.kim@example.com', NOW(), 'password116', 'token116', NOW(), NOW()),
('Henry Clark', 'henry.clark@example.com', NOW(), 'password117', 'token117', NOW(), NOW()),
('Ivy Turner', 'ivy.turner@example.com', NOW(), 'password118', 'token118', NOW(), NOW()),
('Jack Scott', 'jack.scott@example.com', NOW(), 'password119', 'token119', NOW(), NOW()),
('Karen Adams', 'karen.adams@example.com', NOW(), 'password120', 'token120', NOW(), NOW()),
('Louis Walker', 'louis.walker@example.com', NOW(), 'password121', 'token121', NOW(), NOW()),
('Megan Hall', 'megan.hall@example.com', NOW(), 'password122', 'token122', NOW(), NOW());
```

### Insert profiles data

```
/* =============
Insert profiles data
================ */

INSERT INTO profiles (firstName, lastName, mobile, city, shippingAddress, email, created_at, updated_at) VALUES
('Jane', 'Smith', '234-567-8901', 'Los Angeles', '456 Oak St, Suite 1', 'jane.smith@example.com', NOW(), NOW()),
('Alice', 'Brown', '345-678-9012', 'Chicago', '789 Pine St, Floor 2', 'alice.brown@example.com', NOW(), NOW()),
('Bob', 'Johnson', '456-789-0123', 'Houston', '101 Maple St, Apt 3', 'bob.johnson@example.com', NOW(), NOW()),
('Charlie', 'Williams', '567-890-1234', 'Phoenix', '202 Elm St, Unit 5', 'charlie.williams@example.com', NOW(), NOW()),
('David', 'Lee', '678-901-2345', 'San Francisco', '303 Cedar St, Apt 6', 'david.lee@example.com', NOW(), NOW()),
('Eve', 'White', '789-012-3456', 'Seattle', '404 Birch St, Unit 7', 'eve.white@example.com', NOW(), NOW()),
('Frank', 'Harris', '890-123-4567', 'Denver', '505 Fir St, Floor 8', 'frank.harris@example.com', NOW(), NOW()),
('Grace', 'Kim', '901-234-5678', 'Austin', '606 Redwood St, Apt 9', 'grace.kim@example.com', NOW(), NOW()),
('Henry', 'Clark', '012-345-6789', 'Dallas', '707 Willow St, Suite 10', 'henry.clark@example.com', NOW(), NOW()),
('Ivy', 'Turner', '123-234-7890', 'Miami', '808 Palm St, Unit 11', 'ivy.turner@example.com', NOW(), NOW()),
('Jack', 'Scott', '234-345-8901', 'Boston', '909 Oak St, Apt 12', 'jack.scott@example.com', NOW(), NOW()),
('Karen', 'Adams', '345-456-9012', 'Chicago', '1010 Maple St, Unit 13', 'karen.adams@example.com', NOW(), NOW()),
('Louis', 'Walker', '456-567-0123', 'New York', '1111 Birch St, Apt 14', 'louis.walker@example.com', NOW(), NOW()),
('Megan', 'Hall', '567-678-1234', 'San Francisco', '1212 Pine St, Floor 15', 'megan.hall@example.com', NOW(), NOW());
```

### Insert users data

```
/* =============
Insert users data
================ */

INSERT INTO categories (categoryName, categoryImg, created_at, updated_at) VALUES
('Electronics', 'electronics.jpg', NOW(), NOW()),
('Fashion', 'fashion.jpg', NOW(), NOW()),
('Home Appliances', 'home_appliances.jpg', NOW(), NOW()),
('Books', 'books.jpg', NOW(), NOW()),
('Sports & Outdoors', 'sports_outdoors.jpg', NOW(), NOW()),
('Toys & Games', 'toys_games.jpg', NOW(), NOW()),
('Beauty & Personal Care', 'beauty_care.jpg', NOW(), NOW()),
('Automotive', 'automotive.jpg', NOW(), NOW()),
('Groceries', 'groceries.jpg', NOW(), NOW()),
('Health & Wellness', 'health_wellness.jpg', NOW(), NOW()),
('Mobile & Accessories', 'mobile_accessories.jpg', NOW(), NOW()),
('Furniture', 'furniture.jpg', NOW(), NOW()),
('Jewelry', 'jewelry.jpg', NOW(), NOW()),
('Pet Supplies', 'pet_supplies.jpg', NOW(), NOW()),
('Stationery', 'stationery.jpg', NOW(), NOW());
```

### Insert brands data

```
/* =============
Insert brands data
================ */

INSERT INTO brands (brandName, brandImg, created_at, updated_at) VALUES
('Hermès', 'hermes.png', NOW(), NOW()),
('Coach', 'coach.png', NOW(), NOW()),
('Fossil', 'fossil.png', NOW(), NOW()),
('Prada', 'prada.png', NOW(), NOW()),
('Michael Kors', 'michael_kors.png', NOW(), NOW()),
('Kate Spade', 'kate_spade.png', NOW(), NOW()),
('Burberry', 'burberry.png', NOW(), NOW()),
('Salvatore Ferragamo', 'ferragamo.png', NOW(), NOW()),
('Longchamp', 'longchamp.png', NOW(), NOW()),
('Tory Burch', 'tory_burch.png', NOW(), NOW());
```

### Insert products data

```
/* =============
Insert products data
================ */
INSERT INTO products (shot_des, title, price, discount, discount_price, img, stack, star, remark, category_id, brand_id, created_at, updated_at) VALUES
('Leather Wallet', 'Classic Leather Wallet', '50', 1, '40', 'wallet1.png', 1, 4.5, 'popular', 1, 3, NOW(), NOW()),
('Handbag', 'Stylish Handbag', '120', 1, '100', 'handbag1.png', 1, 4.7, 'trending', 2, 1, NOW(), NOW()),
('Leather Jacket', 'Premium Leather Jacket', '300', 1, '250', 'jacket1.png', 1, 4.8, 'top', 3, 5, NOW(), NOW()),
('Leather Belt', 'Durable Leather Belt', '35', 0, 0, 'belt1.png', 1, 4.3, 'regular', 4, 6, NOW(), NOW()),
('Shoes', 'Luxury Leather Shoes', '250', 1, '220', 'shoes1.png', 1, 4.9, 'special', 5, 8, NOW(), NOW()),
('Leather Bag', 'Elegant Leather Bag', '150', 1, '120', 'bag1.png', 1, 4.6, 'popular', 2, 4, NOW(), NOW()),
('Watch Strap', 'Stylish Watch Strap', '45', 0, 0, 'strap1.png', 1, 4.2, 'new', 6, 7, NOW(), NOW()),
('Leather Gloves', 'Warm Leather Gloves', '80', 1, '65', 'gloves1.png', 1, 4.5, 'special', 7, 2, NOW(), NOW()),
('Leather Shoes', 'Comfortable Leather Shoes', '180', 1, '150', 'shoes2.png', 1, 4.8, 'top', 5, 9, NOW(), NOW()),
('Crossbody Bag', 'Modern Crossbody Bag', '130', 1, '100', 'bag2.png', 1, 4.7, 'trending', 2, 6, NOW(), NOW()),
('Leather Journal', 'Handcrafted Leather Journal', '40', 1, '30', 'journal1.png', 1, 4.4, 'regular', 8, 1, NOW(), NOW()),
('Leather Sofa', 'Luxurious Leather Sofa', '1200', 0, 0, 'sofa1.png', 1, 4.9, 'special', 9, 10, NOW(), NOW()),
('Leather Laptop Bag', 'Executive Laptop Bag', '250', 1, '200', 'laptopbag1.png', 1, 4.7, 'popular', 2, 8, NOW(), NOW()),
('Leather Portfolio', 'Professional Leather Portfolio', '90', 1, '75', 'portfolio1.png', 1, 4.6, 'new', 10, 7, NOW(), NOW()),
('Leather Sandals', 'Comfort Leather Sandals', '100', 0, 0, 'sandals1.png', 1, 4.5, 'regular', 5, 9, NOW(), NOW()),
('Leather Messenger Bag', 'Vintage Messenger Bag', '200', 1, '180', 'messenger1.png', 1, 4.8, 'special', 2, 3, NOW(), NOW()),
('Leather Recliner', 'Comfort Recliner Chair', '1500', 0, 0, 'recliner1.png', 1, 4.9, 'top', 9, 10, NOW(), NOW()),
('Leather Cap', 'Stylish Leather Cap', '60', 1, '50', 'cap1.png', 1, 4.3, 'new', 11, 4, NOW(), NOW()),
('Leather Keychain', 'Handmade Keychain', '15', 0, 0, 'keychain1.png', 1, 4.0, 'regular', 12, 2, NOW(), NOW()),
('Leather Briefcase', 'Professional Briefcase', '350', 1, '300', 'briefcase1.png', 1, 4.9, 'special', 2, 5, NOW(), NOW());


SHOW INDEX FROM product_details;
```

### Insert product_details data

```
/* =============
Insert product_details data
================ */
INSERT INTO product_details (img1, img2, img3, img4, des, color, size, product_id, created_at, updated_at) VALUES
('wallet1_img1.png', 'wallet1_img2.png', 'wallet1_img3.png', 'wallet1_img4.png', 'Classic leather wallet made with premium materials.', 'Brown', 'One Size', 142, NOW(), NOW()),
('handbag1_img1.png', 'handbag1_img2.png', 'handbag1_img3.png', 'handbag1_img4.png', 'Stylish handbag for all occasions.', 'Black', 'Medium', 143, NOW(), NOW()),
('jacket1_img1.png', 'jacket1_img2.png', 'jacket1_img3.png', 'jacket1_img4.png', 'Premium leather jacket with a modern fit.', 'Black', 'Large', 144, NOW(), NOW()),
('belt1_img1.png', 'belt1_img2.png', 'belt1_img3.png', 'belt1_img4.png', 'Durable leather belt with adjustable length.', 'Dark Brown', 'One Size', 145, NOW(), NOW()),
('shoes1_img1.png', 'shoes1_img2.png', 'shoes1_img3.png', 'shoes1_img4.png', 'Luxury leather shoes with a comfortable fit.', 'Black', '42', 146, NOW(), NOW()),
('bag1_img1.png', 'bag1_img2.png', 'bag1_img3.png', 'bag1_img4.png', 'Elegant leather bag for everyday use.', 'Tan', 'Large', 147, NOW(), NOW()),
('strap1_img1.png', 'strap1_img2.png', 'strap1_img3.png', 'strap1_img4.png', 'Stylish watch strap in genuine leather.', 'Brown', 'Standard', 148, NOW(), NOW()),
('gloves1_img1.png', 'gloves1_img2.png', 'gloves1_img3.png', 'gloves1_img4.png', 'Warm leather gloves for winter.', 'Black', 'M', 149, NOW(), NOW()),
('shoes2_img1.png', 'shoes2_img2.png', 'shoes2_img3.png', 'shoes2_img4.png', 'Comfortable leather shoes for daily wear.', 'Brown', '43', 150, NOW(), NOW()),
('bag2_img1.png', 'bag2_img2.png', 'bag2_img3.png', 'bag2_img4.png', 'Modern crossbody bag for on-the-go style.', 'Gray', 'Medium', 151, NOW(), NOW()),
('journal1_img1.png', 'journal1_img2.png', 'journal1_img3.png', 'journal1_img4.png', 'Handcrafted leather journal for notes and sketches.', 'Dark Brown', 'A5', 152, NOW(), NOW()),
('sofa1_img1.png', 'sofa1_img2.png', 'sofa1_img3.png', 'sofa1_img4.png', 'Luxurious leather sofa for ultimate comfort.', 'Black', 'Large', 153, NOW(), NOW()),
('laptopbag1_img1.png', 'laptopbag1_img2.png', 'laptopbag1_img3.png', 'laptopbag1_img4.png', 'Executive laptop bag with multiple compartments.', 'Black', '15-inch', 154, NOW(), NOW()),
('portfolio1_img1.png', 'portfolio1_img2.png', 'portfolio1_img3.png', 'portfolio1_img4.png', 'Professional leather portfolio for documents.', 'Brown', 'Standard', 155, NOW(), NOW()),
('sandals1_img1.png', 'sandals1_img2.png', 'sandals1_img3.png', 'sandals1_img4.png', 'Comfort leather sandals for summer.', 'Tan', '42', 156, NOW(), NOW()),
('messenger1_img1.png', 'messenger1_img2.png', 'messenger1_img3.png', 'messenger1_img4.png', 'Vintage messenger bag for laptops and documents.', 'Brown', 'Large', 157, NOW(), NOW()),
('recliner1_img1.png', 'recliner1_img2.png', 'recliner1_img3.png', 'recliner1_img4.png', 'Comfort recliner chair with leather upholstery.', 'Dark Brown', 'XL', 158, NOW(), NOW()),
('cap1_img1.png', 'cap1_img2.png', 'cap1_img3.png', 'cap1_img4.png', 'Stylish leather cap for casual wear.', 'Black', 'Adjustable', 159, NOW(), NOW()),
('keychain1_img1.png', 'keychain1_img2.png', 'keychain1_img3.png', 'keychain1_img4.png', 'Handmade leather keychain with durable material.', 'Brown', 'One Size', 160, NOW(), NOW()),
('briefcase1_img1.png', 'briefcase1_img2.png', 'briefcase1_img3.png', 'briefcase1_img4.png', 'Professional leather briefcase for office use.', 'Black', 'Standard', 161, NOW(), NOW());
```

### Insert product_sliders data

```
/* =============
Insert product_sliders data
================ */
INSERT INTO product_sliders (short_des, image, product_id, created_at, updated_at) VALUES
('Classic leather wallet.', 'wallet_slider1.png', 142, NOW(), NOW()),
('Stylish handbag for all occasions.', 'handbag_slider1.png', 143, NOW(), NOW()),
('Modern leather jacket.', 'jacket_slider1.png', 144, NOW(), NOW()),
('Durable leather belt.', 'belt_slider1.png', 145, NOW(), NOW()),
('Luxury leather shoes.', 'shoes_slider1.png', 146, NOW(), NOW()),
('Elegant leather bag.', 'bag_slider1.png', 147, NOW(), NOW()),
('Premium leather strap.', 'strap_slider1.png', 148, NOW(), NOW()),
('Warm leather gloves.', 'gloves_slider1.png', 149, NOW(), NOW()),
('Comfortable leather shoes.', 'shoes_slider2.png', 150, NOW(), NOW()),
('Trendy crossbody bag.', 'bag_slider2.png', 151, NOW(), NOW()),
('Handcrafted leather journal.', 'journal_slider1.png', 152, NOW(), NOW()),
('Luxurious leather sofa.', 'sofa_slider1.png', 153, NOW(), NOW()),
('Executive laptop bag.', 'laptopbag_slider1.png', 154, NOW(), NOW()),
('Professional leather portfolio.', 'portfolio_slider1.png', 155, NOW(), NOW()),
('Comfortable leather sandals.', 'sandals_slider1.png', 156, NOW(), NOW()),
('Vintage leather messenger bag.', 'messenger_slider1.png', 157, NOW(), NOW()),
('Comfort recliner chair.', 'recliner_slider1.png', 158, NOW(), NOW()),
('Stylish leather cap.', 'cap_slider1.png', 159, NOW(), NOW()),
('Handmade leather keychain.', 'keychain_slider1.png', 160, NOW(), NOW()),
('Professional leather briefcase.', 'briefcase_slider1.png', 161, NOW(), NOW());
```

### Insert product_wishes data

```
/* =============
Insert product_wishes data
================ */

INSERT INTO product_wishes (email, product_id, created_at, updated_at) VALUES
('jane.smith@example.com', 142, NOW(), NOW()),
('alice.brown@example.com', 143, NOW(), NOW()),
('bob.johnson@example.com', 144, NOW(), NOW()),
('charlie.williams@example.com', 145, NOW(), NOW()),
('david.lee@example.com', 146, NOW(), NOW()),
('eve.white@example.com', 147, NOW(), NOW()),
('frank.harris@example.com', 148, NOW(), NOW()),
('grace.kim@example.com', 149, NOW(), NOW()),
('henry.clark@example.com', 150, NOW(), NOW()),
('ivy.turner@example.com', 151, NOW(), NOW()),
('jack.scott@example.com', 152, NOW(), NOW()),
('karen.adams@example.com', 153, NOW(), NOW()),
('louis.walker@example.com', 154, NOW(), NOW()),
('megan.hall@example.com', 155, NOW(), NOW());
```

### Insert product_carts data

```
/* =============
Insert product_carts data
================ */
INSERT INTO product_carts (color, size, email, product_id, created_at, updated_at) VALUES
('Black', 'Medium', 'jane.smith@example.com', 142, NOW(), NOW()),
('Brown', 'Large', 'alice.brown@example.com', 143, NOW(), NOW()),
('Tan', 'One Size', 'bob.johnson@example.com', 144, NOW(), NOW()),
('Dark Brown', 'Standard', 'charlie.williams@example.com', 145, NOW(), NOW()),
('Gray', '42', 'david.lee@example.com', 146, NOW(), NOW()),
('Black', 'A5', 'eve.white@example.com', 147, NOW(), NOW()),
('Brown', 'Adjustable', 'frank.harris@example.com', 148, NOW(), NOW()),
('Black', 'XL', 'grace.kim@example.com', 149, NOW(), NOW()),
('Dark Brown', '15-inch', 'henry.clark@example.com', 150, NOW(), NOW()),
('Tan', 'Large', 'ivy.turner@example.com', 151, NOW(), NOW()),
('Black', 'Medium', 'jack.scott@example.com', 152, NOW(), NOW()),
('Brown', '43', 'karen.adams@example.com', 153, NOW(), NOW()),
('Gray', 'Standard', 'louis.walker@example.com', 154, NOW(), NOW()),
('Black', 'One Size', 'megan.hall@example.com', 155, NOW(), NOW());
```

### Insert product_reviews data

```
/* =============
Insert product_reviews data
================ */

INSERT INTO product_reviews (description, email, product_id, created_at, updated_at) VALUES
('This wallet has a premium feel and is very durable. Highly recommended!', 'jane.smith@example.com', 142, NOW(), NOW()),
('Perfect handbag for daily use. Great quality and stylish design.', 'alice.brown@example.com', 143, NOW(), NOW()),
('The jacket is super comfortable and keeps me warm. Love the fit!', 'bob.johnson@example.com', 144, NOW(), NOW()),
('The belt is sturdy and looks great. Matches well with formal outfits.', 'charlie.williams@example.com', 145, NOW(), NOW()),
('The shoes are extremely comfortable for long walks. Worth the price.', 'david.lee@example.com', 146, NOW(), NOW()),
('This bag is spacious and very elegant. Great for office use.', 'eve.white@example.com', 147, NOW(), NOW()),
('I loved the watch strap. Fits perfectly and has a stylish look.', 'frank.harris@example.com', 148, NOW(), NOW()),
('The gloves are cozy and keep my hands warm during winters. Good buy.', 'grace.kim@example.com', 149, NOW(), NOW()),
('These shoes are comfortable and look amazing with casual outfits.', 'henry.clark@example.com', 150, NOW(), NOW()),
('The crossbody bag is lightweight and practical for everyday use.', 'ivy.turner@example.com', 151, NOW(), NOW()),
('Beautifully crafted leather journal. Perfect for sketching and writing.', 'jack.scott@example.com', 152, NOW(), NOW()),
('The sofa is incredibly comfortable and adds a luxurious touch to the living room.', 'karen.adams@example.com', 153, NOW(), NOW()),
('This laptop bag has multiple compartments and is very functional.', 'louis.walker@example.com', 154, NOW(), NOW()),
('Professional portfolio with excellent material. Perfect for meetings.', 'megan.hall@example.com', 155, NOW(), NOW()),
('The sandals are light and comfortable. Ideal for summer.', 'jane.smith@example.com', 156, NOW(), NOW()),
('The messenger bag is vintage yet modern. A fantastic choice for travelers.', 'alice.brown@example.com', 157, NOW(), NOW()),
('The recliner is the epitome of comfort. Worth every penny!', 'bob.johnson@example.com', 158, NOW(), NOW()),
('Stylish leather cap. Great addition to my casual outfits.', 'charlie.williams@example.com', 159, NOW(), NOW()),
('The keychain is durable and has a unique design. Love it!', 'david.lee@example.com', 160, NOW(), NOW()),
('The briefcase is sleek and professional. Excellent for office use.', 'eve.white@example.com', 161, NOW(), NOW());
```
