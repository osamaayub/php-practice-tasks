Core PHP Practice Task List

Guidelines for Candidates

This set of tasks is designed to strengthen your foundational understanding of core PHP concepts such as variables, conditions, loops, arrays, and functions. The tasks focus on real-world data structures like JSON arrays to enhance problem-solving skills. Mastering these concepts will serve as the groundwork for more advanced topics, such as integrating databases and front-end development later in your learning journey.

Important: Avoid copying code; focus on understanding the principles, as they are critical to your growth as a developer.

Sample Data (JSON Format)

Below is a sample JSON dataset representing a list of users and their purchases in an online store:

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

Task List

Task 1: Parse and Display User Data

Objective: Write a PHP script to parse the JSON data and display each user’s name and email.

Instructions:

Create a function getUserData($jsonData) that takes the JSON data as a parameter.

Loop through the users array and print each user’s name and email.

Expected Output:

Name: John Doe, Email: john.doe@example.com
Name: Jane Smith, Email: jane.smith@example.com
Name: Bob Johnson, Email: bob.johnson@example.com

Task 2: Calculate Total Number of Purchases

Objective: Write a PHP script to calculate the total number of purchases made by all users.

Instructions:

Create a function countPurchases($jsonData).

Loop through each user’s purchases array to count the total number of items purchased.

Return the total count.

Expected Output:

Total Purchases: 5

Task 3: Calculate Total Amount Spent by a User

Objective: Write a PHP function that calculates the total amount spent by a given user.

Instructions:

Create a function getUserTotalSpent($jsonData, $userId).

Loop through the user’s purchases and sum up the price values.

Return the total amount spent by the user.

Expected Output:

Total Spent by User 1: 1069.97

Task 4: Find the User with the Highest Spending

Objective: Write a PHP script that identifies which user has spent the most money in total.

Instructions:

Create a function findTopSpender($jsonData).

Loop through each user and calculate their total spending.

Return the name and total spending of the highest spender.

Expected Output:

Top Spender: John Doe with Amount: 1069.97

Task 5: List Users with No Purchases

Objective: Write a PHP script to find and display the names of users who have not made any purchases.

Instructions:

Create a function findUsersWithNoPurchases($jsonData).

If a user’s purchases array is empty, add their name to a result list.

Return or display the list of users with no purchases.

Expected Output:

Users with no purchases: Bob Johnson

Task 6: Sort Users by Total Spending

Objective: Write a PHP script that sorts users by their total spending in descending order.

Instructions:

Create a function sortUsersBySpending($jsonData).

Calculate total spending for each user.

Sort the users based on their total spending.

Return or display the sorted list.

Expected Output:

John Doe spent 1069.97
Jane Smith spent 829.98
Bob Johnson spent 0

Task 7: Add New User and Purchase

Objective: Write a PHP function to add a new user and allow that user to make a purchase.

Instructions:

Create a function addUserAndPurchase($jsonData, $userName, $email, $item, $price).

Append the new user to the users array.

Return the updated JSON data.

Example Usage:

$newJsonData = addUserAndPurchase($jsonData, "Alice Brown", "alice.brown@example.com", "Headphones", 149.99);
echo $newJsonData;

Conclusion

These tasks will help you build a solid foundation in PHP. Completing them will prepare you for more advanced topics, such as working with databases and integrating PHP with front-end technologies. Focus on understanding the logic behind the solutions rather than memorizing code. Happy coding!

