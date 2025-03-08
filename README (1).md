# Core PHP Practice Task List  

## 📌 Introduction  

This task list is designed to strengthen your understanding of **core PHP** concepts, including variables, loops, arrays, functions, and JSON handling. By working through these tasks, you will build a strong foundation in PHP programming, preparing you for more advanced topics such as **database integration** and **front-end development**.  

⚠ **Important:** Avoid copying code—focus on understanding the logic and principles behind each solution.  

---

## 🗂 Sample Data (JSON Format)  

The following JSON dataset represents a list of users and their purchases in an online store:  

```json
{
    "users": [
        {
            "id": 1,
            "name": "John Doe",
            "email": "john.doe@example.com",
            "purchases": [
                { "item": "Laptop", "price": 999.99 },
                { "item": "Mouse", "price": 19.99 },
                { "item": "Keyboard", "price": 49.99 }
            ]
        },
        {
            "id": 2,
            "name": "Jane Smith",
            "email": "jane.smith@example.com",
            "purchases": [
                { "item": "Phone", "price": 799.99 },
                { "item": "Charger", "price": 29.99 }
            ]
        },
        {
            "id": 3,
            "name": "Bob Johnson",
            "email": "bob.johnson@example.com",
            "purchases": []
        }
    ]
}
```

---

## 📝 Task List  

### ✅ Task 1: Parse and Display User Data  
- **Function:** `getUserData($jsonData)`  
- **Expected Output:**  
```
Name: John Doe, Email: john.doe@example.com  
Name: Jane Smith, Email: jane.smith@example.com  
Name: Bob Johnson, Email: bob.johnson@example.com  
```

### ✅ Task 2: Calculate Total Number of Purchases  
- **Function:** `countPurchases($jsonData)`  
- **Expected Output:**  
```
Total Purchases: 5
```

### ✅ Task 3: Calculate Total Amount Spent by a User  
- **Function:** `getUserTotalSpent($jsonData, $userId)`  
- **Expected Output for User 1:**  
```
Total Spent by User 1: 1069.97
```

### ✅ Task 4: Find the User with the Highest Spending  
- **Function:** `findTopSpender($jsonData)`  
- **Expected Output:**  
```
Top Spender: John Doe with Amount: 1069.97
```

### ✅ Task 5: List Users with No Purchases  
- **Function:** `findUsersWithNoPurchases($jsonData)`  
- **Expected Output:**  
```
Users with no purchases: Bob Johnson
```

### ✅ Task 6: Sort Users by Total Spending  
- **Function:** `sortUsersBySpending($jsonData)`  
- **Expected Output:**  
```
John Doe spent 1069.97  
Jane Smith spent 829.98  
Bob Johnson spent 0  
```

### ✅ Task 7: Add New User and Purchase  
- **Function:** `addUserAndPurchase($jsonData, $userName, $email, $item, $price)`  
- **Example Usage:**  
```php
$newJsonData = addUserAndPurchase($jsonData, "Alice Brown", "alice.brown@example.com", "Headphones", 149.99);
echo $newJsonData;
```

- **Expected JSON Output (Partial):**  
```json
{
    "id": 4,
    "name": "Alice Brown",
    "email": "alice.brown@example.com",
    "purchases": [
        { "item": "Headphones", "price": 149.99 }
    ]
}
```

---

## 🏆 Conclusion  
By completing these tasks, you will:  
✅ Strengthen your understanding of **PHP fundamentals**  
✅ Learn how to work with **JSON data structures**  
✅ Improve your **problem-solving skills** in real-world scenarios  

Mastering these will **prepare you for database integration (MySQL) and full-stack development**! Keep practicing, and **happy coding! 🚀**  

---

## 👨‍💻 Author  
**Osama Ayub**  
