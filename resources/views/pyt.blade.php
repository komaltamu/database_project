<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    

</head>
<body>
  
      <!-- <nav class="aa navbar navbar-expand-lg bg-body-tertiary " > -->
        <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong ">
        <div class=" container-fluid">
          <a class="t navbar-brand" href="{{route('home')}}">INVENTORY MANAGEMENT SYSTEM</a>
          <button class="me navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class=" collapse navbar-collapse" id="navbarSupportedContent">
            <ul class=" navbar-nav me-auto mb-2 mb-lg-0">
              <li class=" nav-item">
                <a class="t nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <!-- <li class="nav-item">
                <a class="t nav-link" href="#">Link</a>
              </li> -->
              <li class="nav-item dropdown">
                <a class="t nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Modules
                </a>
                 <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('er')}}">E/R Diagram</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('ct')}}">Relational Schema</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('sc')}}">SQL Code</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('pyt')}}">Python Code</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('index')}}">SQL & DB</a></li>
                            <!-- <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="pdp.html">PERL Database Programming</a></li> -->
                        </ul>
              </li>
              
            </ul>
         
          </div>
        </div>
      </nav>
      <h2 class="he3">PYTHON CODE:</h2>
      <h5 class="he6">1st Attribute:</h5>
      <pre class="bigpp" style="word-wrap: break-word; white-space: pre-wrap;">

        
import random
import string

# Generate random usernames and passwords
def generate_random_string(length):
    letters = string.ascii_letters
    return ''.join(random.choice(letters) for i in range(length))

# Generate data for 1000 tuples
data = []
for i in range(1, 1001):
    login_id = i
    login_role_id = random.randint(1, 10)
    login_userName = generate_random_string(8)
    login_user_Password = generate_random_string(12)
    data.append((login_id, login_role_id, login_userName, login_user_Password))

# Output the data
print(data)

        
        </pre>
        
        <h5 class="he6">2nd Attribute:</h5>
      <pre class="bigpp" style="word-wrap: break-word; white-space: pre-wrap;">
        

import random
import string
        
# Generate random strings
def generate_random_string(length):
    letters = string.ascii_letters
    return ''.join(random.choice(letters) for i in range(length))
        
# Generate data for 1000 tuples
data = []
for i in range(1, 1001):
    permission_id = i
    permission_names = generate_random_string(8)
    permission_role_id = random.randint(1, 10)
    permission_module = generate_random_string(12)
    data.append((permission_id, permission_names, permission_role_id, permission_module))
        
# Output the data
print(data)
        
      </pre>
        <h5 class="he6">3rd Attribute:</h5>
      <pre class="bigpp" style="word-wrap: break-word; white-space: pre-wrap;">


import random
import string
        
# Generate random strings
def generate_random_string(length):
    letters = string.ascii_letters
    return ''.join(random.choice(letters) for i in range(length))
        
# Generate random phone numbers
def generate_random_phone_number(length):
    digits = string.digits
    return ''.join(random.choice(digits) for i in range(length))
        
# Generate data for 1000 tuples
data = []
for i in range(1, 1001):
    userid = i
    username = generate_random_string(10)
    user_email = generate_random_string(8) + "@example.com"
    user_address = generate_random_string(50)
    usermobile_no = generate_random_phone_number(10)
    data.append((userid, username, user_email, user_address, usermobile_no))
        
# Output the data
print(data)
        
      </pre>
        <h5 class="he6">4th Attribute:</h5>
      <pre class="bigpp" style="word-wrap: break-word; white-space: pre-wrap;">
        

import random
import string
        
# Generate random strings
def generate_random_string(length):
    letters = string.ascii_letters
    return ''.join(random.choice(letters) for i in range(length))
        
# Generate data for 1000 tuples
data = []
for i in range(1, 1001):
    roleid = i
    login_id = random.randint(1, 1000) # Assuming you have 1000 tuples in the logins table
    role_name = generate_random_string(40)
    role_designation = generate_random_string(50)
    data.append((roleid, login_id, role_name, role_designation))
        
# Output the data
print(data)
        
      </pre>
        <h5 class="he6"> 5th Attribute:</h5>
      <pre class="bigpp" style="word-wrap: break-word; white-space: pre-wrap;">
       

import random
import string
        
# generate login_ids
logins = list(range(1, 1001))
        
# generate customer names
customer_names = [''.join(random.choices(string.ascii_letters, k=10)) for _ in range(1000)]
        
# generate customer passwords
customer_passwords = [''.join(random.choices(string.ascii_letters + string.digits, k=8)) for _ in range(1000)]
        
# generate customer emails
customer_emails = [f"{name.lower()}@example.com" for name in customer_names]
        
# generate customer addresses
customer_addresses = [''.join(random.choices(string.ascii_letters + string.digits, k=30)) for _ in range(1000)]
        
# generate customer mobile numbers
customer_mobiles = [f"1{random.randint(0, 9)}{random.randint(100, 999)}{random.randint(1000, 9999)}" for _ in range(1000)]
        
# shuffle the logins to assign to customers randomly
random.shuffle(logins)
        
# combine the data into tuples
data = [(i+1, logins[i], customer_names[i], customer_passwords[i], customer_emails[i], customer_addresses[i], customer_mobiles[i]) for i in range(1000)]
        
print(data)
        </pre>
        <h5 class="he6"> 6th Attribute:</h5>
      <pre class="bigpp" style="word-wrap: break-word; white-space: pre-wrap;">
        

import random
import string
        
# Generate random strings
def generate_random_string(length):
    letters = string.ascii_letters
    return ''.join(random.choice(letters) for i in range(length))
        
# Generate data for 1000 tuples
data = []
for i in range(1, 1001):
    inventory_id = i
    inventory_items = generate_random_string(10) + " " + generate_random_string(10)
    inventory_number = random.randint(1, 100)
    inventory_type = random.choice(['Type A', 'Type B', 'Type C'])
    inventory_description = generate_random_string(20)
    data.append((inventory_id, inventory_items, inventory_number, inventory_type, inventory_description))
        
# Output the data
print(data)
        

      </pre>
        <h5 class="he6"> 7th Attribute:</h5>
        <pre class="bigpp" style="word-wrap: break-word; white-space: pre-wrap;">
        

import random
import string
          
# Generate random strings
def generate_random_string(length):
    letters = string.ascii_letters
    return ''.join(random.choice(letters) for i in range(length))
          
# Generate data for 1000 tuples
data = []
for i in range(1, 1001):
    payment_id = i
    customer_id = random.randint(1, 1000) # Assuming customer table has 1000 tuples
    payment_amount = random.randint(1, 1000)
    payment_description = generate_random_string(50)
    payment_date = f"{random.randint(1, 12)}/{random.randint(1, 28)}/2022" # Assuming year is 2022
    data.append((payment_id, customer_id, payment_amount, payment_description, payment_date))
          
        </pre>
            <h5 class="he6"> 8th Attribute:</h5>
        <pre class="bigpp" style="word-wrap: break-word; white-space: pre-wrap;">
       

import random

# define inventory data
inventory_ids = list(range(1, 1001))
inventory_types = ['Electronics', 'Books', 'Clothing', 'Toys', 'Furniture']
inventory_descs = ['Electronics stock', 'Books stock', 'Clothing stock', 'Toys stock', 'Furniture stock']
          
# generate 1000 tuples of data
data = []
for i in range(1, 1001):
    stock_id = i
    inventory_id = random.choice(inventory_ids)
    stock_type = random.choice(inventory_types)
    stock_desc = random.choice(inventory_descs)
    data.append((stock_id, inventory_id, stock_type, stock_desc))
          
 # print the data
 for tup in data:
  print(tup)
    </pre>
    
</body>

</html>


