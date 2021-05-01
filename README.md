# petro-app
petroleum database application built with PHP and embedded MySQL <br>
#--------------------------------------------------------------# <br>
<strong>Section 1: Project Requirements</strong><br>
Cajun Petroleum Producing Company (CPPC) is a limited liability company involved in the
production of hydrocarbons (oil and gas) from onshore wells in Louisiana. The CPPC Well
Production Logging System is designed to keep track of the daily production of oil and gas
from all wells owned by CPPC. The aim of the system is to provide a central point for all wells
and their details and to ensure production reporting process can be done online without the need
of paperwork anymore. Data will be readily accessible anywhere online without need of faxing
or postage.
<br>
CPPC has 10 oil fields across 8 Parishes in the state of Louisiana. In total, there are 60 wells in
these fields. A field can have many wells. The name, measured depth, vertical depth, and
production start date of each well is known. Each well produces oil, gas, and unwanted water.
CPPC has 3 offices whose address, and phone number are known. Each office oversees
production from selected parishes—each office is assigned specific parishes. At the end of each
day, designated employees in these offices report production for wells in parishes under their
jurisdiction. Occasionally some wells undergo testing to record some reservoir parameters (well
pressure, water, oil, gas) which relates to the life of the wells.
The application is designed using XAMPP and runs with the bundle of Apache as HTTP Server,
MariaDB as the database management system and PHP as the scripting language used for
dynamic web pages and web development.
<br>
The following database interactions are expected from the database system:
1. List of wells by field, and Parish where well is located.
2. Daily oil and gas production by well and field
3. Name, location and ID of employee logging production data and time for logging the
data.
4. List of wells which have undergone testing.
5. Office location with assigned wells, fields, and parishesSection 2: Data Modelling
2.1 High level Conceptual data model
Figure 1. shows the structure of the database—a high-level data model (E-R diagram) which
consist of the entities, attributes, and associations.
<br>
<strong>Normalization<strong/>
All tables in the relational model are in 3NF because.
● There are no composite attributes—the data values are atomic.
● There are no composite primary keys. Each table has a unique primary key. In
essence, functional dependency of non-key attributes on subsets of the primary
key is absent.
● There is no functional dependency between non-key attributes.

![alt text](https://github.com/tipphead/petro-app/blob/main/louisiana6.svg?raw=true)

The total sum security features implemented in this application were:
1. Credential Login, with the ability for public viewing with no credentials
2. SHA1 hashed passwords
3. Binded PHP variables when taking input from users
a. Null
b. tab
c. newline
d. vertical tab
e. carriage return
f. ordinary white space
4. Storage and display of user session variables to ensure credentials were
used to login
5. Prompts before dangerous actions such as a delete query
6. Prefilling of forms and use of minlength & maxlength to aid in the proper
input to the database
