Session - Spot Map App Aiesha Esa David Mesa Edmund Felicidario CMPS
3420-60 Spring 2022 \_\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_

1.1 - Fact-Finding Techniques and Information Gathering 1.1.1 -
Introduction to the Enterprise/Organization. 1.1.2 - Description of
Fact-Finding Techniques. 1.1.3 - The Miniverse of Interest. 1.1.4 -
Description of Entity sets and Relationship sets. 1.1.5 - User Groups,
Data Views, and Operations. 1.2 - Conceptual Database Design. 1.2.1 -
Entity Descriptions 1.2.2 - Relationship Descriptions 1.2.3 - Enhanced
ER Descriptions 1.2.4 - ER Diagram 2.1 - The ER and Relational models:
2.1.1 - Descriptions of ER and Relational Models 2.1.2 - Model
Comparisons 2.2 - Conceptual to Logical Conversion Process 2.2.1 -
Converting Entity Types to Relations 2.2.2 - Converting Relationship
Types to Relations 2.2.3 - Converting Extended Types to Relations 2.2.4
- Database Constraints 2.3 - Results of ER to Relational Conversion
2.3.1 Relation Schema Stop here! The above sections are all you need for
the Phase 2 submission. 2.3.2 Sample Data 2.4 - Sample Queries 2.4.1
Design Of Queries 2.4.2 Relational Calculus Expressions 2.4.3 Relational
Algebra Expressions

1.1 - Fact-Finding Techniques and Information Gathering 1.1.1 -
Introduction to the Enterprise/Organization. The business project will
be an application where users can find, share, and create spots with
your local community and around the world. The target audience for this
application will be skateboarders, BMX, scooters, roller skaters, and
bladers. The business' most important activities are geared towards
finding appropriate obstacles and spots in the streets for the target
audience to use and enjoy with their friends.\
1.1.2 - Description of Fact-Finding Techniques. We are mostly asking
people that we know that are enthusiasts of how they would like the
application. They can provide an idea of what other people would like to
see and would like in an application. We are referencing other
applications with something similar and discussing what we like, what we
don't, and what we would like to see implemented into the app. 1.1.3 -
The Miniverse of Interest. Entities: \* User \* Administrator \*
Moderator \* NewSpot Relationships: \* Users can SUBMIT a new spot. \*
Moderator REVIEWS every NewSpot submission. After reviewing it they can
either Approve, Deny, or Edit the new spot submissions from users. \*
Moderator WORKS\_FOR administrator so they have all the same privileges;
they can also delete spots and pictures. 1.1.4 - Description of Entity
sets and Relationship sets. We have identified 4 entities: User,
Moderator, Administrator, and NewSpots. Everyone will be a user and can
create a profile and a unique username, Name, Biography and their
preferred sport. All Users will be able to look up locations to skate
at, upload pictures of the location, rate existing locations and be able
to suggest new locations. All new entries will have to be accepted or
denied by Moderators, the Administrator will have all the same
abilities, however, they will be the only ones able to delete spots and
pictures deemed inappropriate.

1.1.5 - User Groups, Data Views, and Operations. Moderators This user
group will be able to monitor and manipulate the database as well as
monitor the community and the spots being contributed. Moderators will
be able to approve or deny new spot submissions, and they will be able
to edit new submissions as well as spots that have already been
approved. They will also be able to interact and have the same abilities
as Users. Administrator The Administrator is the only one to have the
ability to remove illegitimate or repeated spot submission. They will
have all the same abilities as Moderators. Users Users will be the main
people to interact with our database. This User group will be able to
create and personalize their own account and profile, select their
preferred sport (skateboarding, scootering, BMX), add friends, view,
like, rate, and comment on spots, and contribute spots of their own.

1.2 - Conceptual Database Design. 1.2.1 - Entity Descriptions \* User \*
A 'user' is able to create a profile that displays their username,
profile picture, Fname/Lname, Bio, and their preferred sport/ride. \*
Strong Entity \* Attributes: \* Name user\_id \* Description ID number
given to users. \* Data type Integer \* Value range Positive numbers \*
Default value No \* Null value allowed or not? Null wouldn't be allowed;
can't have null userID \* Is the attribute unique? Yes \* Single or
multiple-value? Single \* Simple or composite? Simple \* Stored or
derived? Stored

-   Name username

-   Description What the user names their account

-   Data type String

-   Value range Non-empty string

-   Default value No

-   Null value allowed or not? Null wouldn't be allowed; can't have null
    username

-   Is the attribute unique? Yes

-   Single or multiple-value? Single

-   Simple or composite? Simple

-   Stored or derived? Stored

-   Name password

-   Description User's password

-   Data type text

-   Value range Empty string

-   Default value Yes; empty

-   Null value allowed or not? No

-   Is the attribute unique No

-   Single or multiple-value? Single

-   Simple or composite? Simple

-   Stored or derived? Stored

-   Name email

-   Description User's email

-   Data type String

-   Value range Empty string

-   Default value Yes; empty

-   Null value allowed or not? Not allowed

-   Is the attribute unique Yes

-   Single or multiple-value? Single

-   Simple or composite? Simple

-   Stored or derived? Stored

-   Name fname

-   Description User's first name

-   Data type String

-   Value range Empty string

-   Default value Yes; empty

-   Null value allowed or not? Not allowed

-   Is the attribute unique No

-   Single or multiple-value? Single

-   Simple or composite? Simple

-   Stored or derived? Stored

-   Name lname

-   Description User's last name

-   Data type String

-   Value range Empty string

-   Default value Yes; empty

-   Null value allowed or not? Not allowed

-   Is the attribute unique No

-   Single or multiple-value? Single

-   Simple or composite? Simple

-   Stored or derived? Stored

-   Name ucity

-   Description Users can enter the city the spot is located.

-   Data type string

-   Value range Non-empty

-   Default value Spot

-   Null value allowed or not? No, users must submit the city.

-   Is the attribute unique? No, there can be multiple spots in a city.

-   Single or multiple-value? Single

-   Simple or composite? Simple

-   Stored or derived? Stored

-   Name ustate

-   Description Users can enter the state the spot is located.

-   Data type string

-   Value range Non-empty

-   Default value Spot

-   Null value allowed or not? No, users must submit the state.

-   Is the attribute unique? No, there can be multiple spots in a state.

-   Single or multiple-value? Single

-   Simple or composite? Simple

-   Stored or derived? Stored

-   Name sport

-   Description Users can select sport/ride preference (i.e. skateboard,
    scooter)

-   Data type String

-   Value range Empty string

-   Default value Yes; empty

-   Null value allowed or not? Yes; Ride Preference is optional.

-   Is the attribute unique No

-   Single or multiple-value? Single

-   Simple or composite? Simple

-   Stored or derived? Stored

-   Unique attributes:

    -   'user\_id' will be a unique attribute for the entity, 'user'.
        'user\_id' will be used for identification.
    -   'Username' will also be unique so that the users can use that to
        login.

-   admin

-   Moderates and approves user 'Spot' submissions.

-   Weak Entity; depends on 'User' entity

-   Attributes:

    -   Name admin\_id

    -   Description ID number given to admins

    -   Data type Integer

    -   Value Range Positive Number

    -   Default value Yes, null

    -   Null value allowed or not? No

    -   Is the attribute unique? Yes

    -   Single or multiple-value? Single

    -   Simple or composite? Simple

    -   Stored or derived Stored

    -   Name user\_id

    -   Description User ID number of the admin

    -   Data type Integer

    -   Value Range Positive Number

    -   Default value No, null

    -   Null value allowed or not? No

    -   Is the attribute unique? Yes

    -   Single or multiple-value? Single

    -   Simple or composite? Simple

    -   Stored or derived Stored

-   newspot

-   This is what users submit to contribute to the 'Spot Map'.

-   Weak Entity; depends on 'User'.

-   Attributes:

    -   Name spot\_id

    -   Description ID number assigned to spot

    -   Data type Integer

    -   Value Range Positive Number

    -   Default value Yes, null

    -   Null value allowed or not? No

    -   Is the attribute unique? Yes

    -   Single or multiple-value? Single

    -   Simple or composite? Simple

    -   Stored or derived Stored

    -   Name address

    -   Description Uses a satellite map (Apple, Google) to pinpoint
        where the spot is and allows users to use their phones and
        locate it.

    -   Data type Geolocation

    -   Value range Non-empty

    -   Default value Spot

    -   Null value allowed or not? No, users must submit the actual
        location.

    -   Is the attribute unique? Yes, each spot is unique; no copies of
        spots.

    -   Single or multiple-value? Single

    -   Simple or composite? Simple

    -   Stored or derived? Derived

    -   Name zip\_code

    -   Description Zip code the spot is located in.

    -   Data type Integer

    -   Value range Non-empty

    -   Default value null

    -   Null value allowed or not? No, users must submit the zip code

    -   Is the attribute unique? No

    -   Single or multiple-value? Single

    -   Simple or composite? Simple

    -   Stored or derived? Derived

    -   Name scity

    -   Description Users can enter the city the spot is located.

    -   Data type string

    -   Value range Non-empty

    -   Default value Spot

    -   Null value allowed or not? No, users must submit the city.

    -   Is the attribute unique? No, there can be multiple spots in a
        city.

    -   Single or multiple-value? Single

    -   Simple or composite? Simple

    -   Stored or derived? Stored

    -   Name sstate

    -   Description Users can enter the state the spot is located.

    -   Data type string

    -   Value range Non-empty

    -   Default value Spot

    -   Null value allowed or not? No, users must submit the state.

    -   Is the attribute unique? No, there can be multiple spots in a
        state.

    -   Single or multiple-value? Single

    -   Simple or composite? Simple

    -   Stored or derived? Stored

    -   Name submit\_date

    -   Description Date the spot was originally submitted

    -   Data type date

    -   Value range Non-empty

    -   Default value current\_timestamp()

    -   Null value allowed or not? No, spot submission must have date

    -   Is the attribute unique? No, there can be multiple spots
        submitted at the same time

    -   Single or multiple-value? Single

    -   Simple or composite? Simple

    -   Stored or derived? Stored

    -   Name difficulty\_rating

    -   Description Users can rate the spot based on difficulty and how
        good it is overall.

    -   Data type Integer

    -   Value range 1 - 5 (5 Stars scale)

    -   Default value Null

    -   Null value allowed or not? Yes, spot has no initial rating;
        User-based.

    -   Is the attribute unique? Yes, each spot has its own unique
        rating.

    -   Single or multiple-value? Single

    -   Simple or composite? Simple

    -   Stored or derived? Stored

    -   Name description

    -   Description User can provide a brief description of the spot
        (i.e. busy on weekdays, high bust rate, crusty or clean)

    -   Data type String

    -   Value range Empty string

    -   Default value Yes

    -   Null value allowed or not? Yes, descriptions are optional.

    -   Is the attribute unique? No

    -   Single or multiple-value? Multiple-value

    -   Simple or composite? Simple

    -   Stored or derived? Stored

    -   

-   Give a list of the unique attributes.

    -   Unique attributes are SpotID and Address 1.2.2 - Relationship
        Descriptions

-   Name: IS\_A

-   Description: User IS\_A Administrator

-   Entity sets involved in the relationship: User & Administrator

-   Overall cardinality: 1:1, 0:1

-   Structural constraints of each entity: (participation, cardinality)

-   Participation constraint: partial/optional

-   Any attributes of the relationship: No attributes

-   Name: SUMBITS

-   Description: User SUBMITS a NewSpot

-   Entity sets involved in the relationship: User & NewSpot

-   Overall cardinality: 1:1, 1:M

-   Structural constraints of each entity: (participation, cardinality)

-   Participation constraint: partial/optional

-   Any attributes of the relationship: No attributes

-   Name: INTERACTS

-   Description: User INTERACTS NewSpot submissions

-   Entity sets involved in the relationship: User & NewSpot

-   Overall cardinality: 0:M, 0:M

-   Structural constraints of each entity: (participation, cardinality)

-   Participation constraint: total/mandatory?

-   Any attributes of the relationship:

    -   Name Likes

    -   Description Amount of users that like the spot

    -   Data type Integer

    -   Value range Empty integer

    -   Default value Yes, 0.

    -   Null value allowed or not? Yes, each spot can have 0 to infinite
        amount of likes.

    -   Is the attribute unique? No

    -   Single or multiple-value? Single

    -   Simple or composite? Simple

    -   Stored or derived? Stored

    -   Name Comments

    -   Description Comments that users can leave on each spot

    -   Data type String

    -   Value range 0-150 characters

    -   Default value Yes, empty.

    -   Null value allowed or not? Yes, a spot can have 0 to infinite
        amount of comments.

    -   Is the attribute unique? No

    -   Single or multiple-value? Multiple-value

    -   Simple or composite? Simple

    -   Stored or derived? Stored

-   Name: REVIEWS

-   Description: Admin REVIEWS NewSpot submissions

-   Entity sets involved in the relationship: Moderator & NewSpot

-   Overall cardinality: 1:1, 1:M

-   Structural constraints of each entity: (participation, cardinality)

-   Participation constraint: total/mandatory?

-   Any attributes of the relationship:

    -   Name Approves
    -   Description Approves NewSpot submissions
    -   Data type Boolean
    -   Value Range True or False
    -   Default value Yes, False
    -   Null value allowed or not? No
    -   Is the attribute unique? No
    -   Single or multiple-value? Single
    -   Simple or composite? Simple
    -   Stored or derived Stored 1.2.3 - Enhanced ER Descriptions We did
        not include any features that the Enhanced ER Diagram has, we
        didn't see it adding much use to the diagram we created. 1.2.4 -
        ER Diagram

2.1 - The ER and Relational models: An Entity-Relationship model (ER
model) is a model that focuses mostly on objects called entities and the
relationship between those entities. Entities here will have properties
that are called attributes.Attributes include simple, composite,
derived, single-value, mult-value, and combination of such attributes
such as simple single- valued attributes.Entities have primary keys,
Foreign keys to help identify an entity set. Each entity has
relationships and cardinality. A Relational model ( RM model) is a model
that focuses mostly on Tables and the relation between them. RM models
have what is called a tuple which is a row in a table. It represents how
data is to be stored in a Relational Database. It uses relational
calculus to find what a person is looking for in a data table, which is
a powerful tool. All data must be stored in relation i.e tables. It also
relies heavily on keys, since keys are what connect each table to one
another. It also has rules that must be followed so that there is data
integrity. 2.1.1 - Descriptions of ER and Relational Models The
Entity-Relationship model was designed by Peter Chan which was published
in 1976. The main focus of the ER model is on Entities and their
relationships. The main features that the ER model has is that it can be
relatively easily shown. It has plenty of attributes that one can use.
Whether it be Simple/Composite, Single/Multivalues, derived. It has a
way to show the cardinality between a relationship. It has an easy way
of displaying keys. Its purpose is to show data relationships in
software development. It makes it easier for people to understand how
everything will be connected. The Relational Model was first described
in 1969 by Edgar F. Codd.. The main feature is that it's built from a
set of unique tables(i.e relations). The table will only have data about
just one entity. Tables must have a primary key. The tables are linked
by primary and foreign keys. The data is only stored once in the table.
It has Tuples which only contain a single record. The purpose of the
Entity-Relationship model is to define the data elements and
relationship.It will be the conceptual design for the database. It is a
very simple way to view the data ( the entity, it's attributes, and
relations). The purpose of the Relational Model is to provide a
declarative method for specifying data and queries. We can access data
from another piece of data in a database. It lets a user look up
information that is related or even key information that they are
looking for.

2.1.2 - Model Comparisons There are advantages and disadvantages between
Entity Relationship (ER) model and Relational Models (RM). ER models are
much easier to read. You're able to see the relationships and
cardinality between entities and it's attributes. The disadvantage of
this model is that it's not useful for implementation as it's used as a
conceptual model. On the other hand, the relational model is mainly used
for implementation. You can see components such as tuples and domains.
Able to find and understand the relationships between tables in this
model. The disadvantages in Relational Models are that they are much
harder to understand than ER models. Concepts such as entities are
harder to visualize in Relational Models. 2.2 - Conceptual to Logical
Conversion Process 2.2.1 - Converting Entity Types to Relations When
converting strong entities, you want to create a relation with the same
name as the entity. Then add each simple ER attribute as a relation
attribute: Composite, Multivalued, or Derived. And make sure that some
attribute(s) are designated as the relation's primary key. Converting
weak entities would be the same steps as for the strong entities. Add a
foreign key for the owning relation's primary key and include this as a
part of the weak relation's primary key. When handling simple
attributes, they contain a single (atomic) value. Composite attributes,
on the other hand, take the components, not the composite itself. For
example, instead of 'Employee(Name{F, M, L})' it could be
'Employee(Fname, MI, Lname)'. When handling single-value attributes,
they are the attributes that can have only one value for a given entity.
Multi-value attributes are the attributes that can have multiple values
for a given entity. 2.2.2 - Converting Relationship Types to Relations
When converting Binary 1:1 relationships, if both entities have a total
participation, then a person should consider merging them into one
entity.If only one entity has total participation, then the person
should consider using a foreign key. When merging you take all the
information and make it into one entity. The issue is that if you are
looking for just a particular data that was once its own thing, now you
are getting data that might not be needed. The plus side is that we are
not having to look for data that are completely dependent on each other.
The foreign key approach is a good way to link the data for result that
are connected, but if you are are looking for data that is not linked
together you will yield no results When converting Binary 1:M
relationships there is only 1 approach, which is the foriegn key
approach which is the same as with binary 1:1. You can look at the
relation with a greater cardinality (i.e. \|Employee\| \>
\|Department\|, so add DeptNumber to Employee). When converting Binary
M:N relationships, you can create a LOOKUP TABLE. You can also add both
entities' primary keys to a new relation and put both keys as foreign
keys and collectively as a primary key. A third option is to add any
relationship attributes to a new relationship. In a lookup you create
the same relationship that connects the 2 entities and then populate it
with the relation. You get all your data in one table, the bad thing is
you are creating more data and if you have limited space could be an
issue. When you convert multi-value attributes it yields new relations
that are associated with the entities relation because, when you create
a lookup table you have to use the owning relations primary key and the
attribute itself. There are only 2 ways to deal with multi-value
attributes, we either create additional attributes or create an entirely
new entity. It will create new relations since we might have to create a
new entity or create a new lookup table with new relation with entity
attributes. When converting n-ary relationships you can create a lookup
table the same as Binary M:N relationship except you do it for all
entities.You can set all the primary keys from the participating
entities, which are the foreign keys to each participating entity. You
can include any relationship attributes as part of the relation's
attributes.

2.2.3 - Converting Extended Types to Relations The first option for
converting inherited types is creating multiple relations including the
base entity. This option allows overlapping and partial participation.
The second option would be creating multiple relations, not including
the base entity. This option allows total participation and supports
overlapping but not strongly. The third option would be to create a
single relation to store everything and use a single type attribute to
designate tuples. This option does not support overlapping but does
support partial or total participation. Finally the last option creates
a single relation and uses as many type attributes as there are
relations. This option supports disjoint and overlapping as well as
partial and total participation. You can represent union types by adding
a surrogate key attribute to each of the relations that participates in
the union. You also have to allocate all values for the surrogate key
attributes from the same context to avoid repeats. 2.2.4 - Database
Constraints Relational Model Constraints: \* Entity Constraint: An
entity constraint means the degree must be consistent. For example
tuples in the set must have a matching number of values corresponding to
the relation's degree. \* Primary Key & Unique Key Constraints: The
value of a primary key cannot be NULL. Given a tuple with a particular
value for the relation's unique attributes, there can be no other tuple
in the relation with those same attribute values. \* Referential
Constraints (foreign key): The value of a foreign key must exist as the
primary key value of a tuple in the other relation's set. The value can
be NULL. \* Check Constraints & Business Rules (semantic constraints):
Constraints that we cannot directly represent using the ER model OR the
relational model, such as, "cannot buy liquor after 2 AM". 2.3 - Results
of ER to Relational Conversion 2.3.1 Relation Schema Step 1: Strong
Entity user(user\_id, username, password, email, fname, lname, ucity,
ustate, sport) \* its constraints: \* primary key attributes: \*
user\_id \* candidate keys (attributes that could be used for unique
identification): \* user\_id, username

NewSpot(user\_id, admin\_id, spot\_id, address, zip\_code, scity,
sstate, submit\_date, difficulty\_rating, description, approves) \* its
constraints: \* primary key attributes: \* user\_id \* spot\_id \*
admin\_id \* foreign key attributes (to which relation and its primary
key): \* user\_id \* Taken from user; primary key of user is user\_id \*
admin\_id \* Taken from admin; primary key of admin is admin\_id \*
candidate keys (attributes that could be used for unique identification)
\* user\_id, spot\_id, admin\_id Step 2: Weak Entity
Administrator(user\_id, admin\_id) \* its constraints: \* primary key
attributes: \* user\_id \* foreign key attributes (to which relation and
its primary key) \* user\_id refers to User \* candidate keys
(attributes that could be used for unique identification) \* user\_id,
admin\_id

Step 3: Binary 1:1 Relationships \* its name and attributes: \*
admin(user\_id, admin\_id) \* its constraints: \* primary key
attributes: \* user\_id \* admin\_id \* foreign key attributes (to which
relation and its primary key): \* user\_id \* candidate keys (attributes
that could be used for unique identification) \* user\_id, admin\_id

Step 4: Binary 1:M Relationships SUBMITS: \* attributes: \*
user(user\_id, username, password, email, fname, lname, ucity, ustate,
sport) \* newspot(spot\_id, user\_id, admin\_id, address, zip\_code,
scity, sstate, submit\_date, difficulty\_rating, description, approves)
\* its constraints: \* primary key attributes: \* user\_id \* admin\_id
\* spot\_id \* foreign key attributes: \* user\_id \* Taken from User,
it's primary key is user\_id \* admin\_id \* Taken from admin, it's
primary key is admin\_id. \* candidate keys (attributes that could be
used for unique identification) \* user\_id, spot\_id, admin\_id,
username

Reviews(user\_id, spot\_id, approves, scity, sstate, Description): \*
its constraints: \* primary key attributes: \* UserID \* SpotID \*
foreign key attributes (to which relation and its primary key): \*
UserID \* Taken from User, primary key for User is UserID \* SpotID \*
Taken from NewSpot, primary key for NewSpot is SpotID \* candidate keys
(attributes that could be used for unique identification) \* UserID,
SpotID

Step 5: Binary M:N Relationships Interacts(user\_id, spot\_id, Likes,
Comments) \* its constraints: \* primary key attributes: \* user\_id \*
foreign key attributes (to which relation and its primary key): \*
user\_id, username, Sport \* Taken from User; it's primary key is UserID
\* spot\_id \* Taken from NewSpot, it's primary key is SpotID \*
candidate keys (attributes that could be used for unique identification)
\* UserID, Username, SpotID

Step 1: Strong entity User(UserID, Username, FName, LName, uCity,
uState, BIO, Sport) NewSpot(UserID, SpotID, Address, sCity, sState,
DifficultyRating, Tags, Description) Step 2: Weak entity
Administrator(UserID, Username) Step 3: Binary 1:1 relationships
Administrator(Username) Step 4: Binary 1:M relationships SUBMITS:
User(UserID, Username, FName, LName, uCity, uState BIO, Sport)
NewSpot(SpotID, UserID, Address, sCity, sState, DifficultyRating, Tags,
Description) REVIEWS: Reviews(UserID, SpotID, Approves, sCity, sState,
Tags, Description) Step 5: Binary M:N relationships Interacts(UserID,
SpotID, Username, Sport, Likes, Comments)

2.4 - Sample Queries 2.4.1 Design Of Queries 1. Select all users who are
from California 2. Select all users who are skateboarders (Selected
'skateboard' as their preference) 3. Select each user's name and each
admin's name 4. Select each Spot name and the user name that submitted
it 5. Select each user's name who submitted "stairs" category spots 6.
Select each NewSpot's SpotID, the user who submitted it, and the
administrator that approved the spot. 7. Select the Spot with the
greatest amount of likes in the "ledge" category 8. Select the average
DifficultyRating on each Spot 9. Select administrators who approved all
Spots that are categorized as "hand-rails" 10. Select users who have
rated/reviewed more than 5 spots. 2.4.2 Relational Calculus Expressions
user(user\_id, username, fname, lname, ucity, ustate, bio, sport)
newspot(user\_id, admin\_id, spot\_id, address, zip\_code, scity,
sstate, submit\_date, difficulty\_rating, description, approves)
admin(user\_id, admin\_id) interacts(user\_id, spot\_id, Likes,
Comments) newspotTAGS(spot\_id, tags)

1.  Select all users from California. { u \| User(u) \^ u.uState =
    "California" }

2.  Select all users who are skateboarders (Selected 'skateboard' as
    their preference) {u\| User(u) \^ ∃d(User(d) \^d.Sport =
    "skateboard")}

3.  Select each user's name and each admin's name {u,a\|
    User(u)^Administrator(a)^∃c,d(User(c) \^ Administrator(a)
    \^c.Username = u.Username \^ a.Username = u.Username)}

4.Select each Spot name and the user name that submitted it {u\|
NewSpot(u)^User(U)^∃c,d(NewSpot(c) \^ User(a) \^c.SpotID =
u.SpotId\^c.SpotID != u.SpotID \^ a.Username = u.Username)}

5.  Select each user's name who submitted "stairs" tag spots {u\|
    User(u) \^ NewSpot(U) \^ ∃c,d(User(c) \^NewSpot(d) \^ d.Tag =
    "stairs" \^ c.Username = u.Username)} 2.4.3 Relational Algebra
    Expressions User(UserID, Username, FName, LName, uCity, uState, BIO,
    Sport) NewSpot(UserID, SpotID, Address, sCity, sState,
    DifficultyRating, Tags, Description) Administrator(UserID, Username)
    Reviews(UserID, SpotID, Approves, sCity, sState, Tags, Description)
    Interacts(UserID, SpotID, Username, Sport, Likes, Comments)

6.  Select each NewSpot's SpotID, the user who submitted it, and the
    administrator that approved the spot. R \<- User ⋈NewSpot R2 \< - R
    ⋈Adminstator R3 \<- σSpotID = SpotId \^ username=user.username
    \^username = Admin.username (R2) R4 \<- π SpotID

7.  Select the Spot with the greatest amount of likes in the "ledge"
    category R \<- σ Likes = Likes \^Count(Likes) = Max(Likes) R2 \< - π
    Likes

8.  Select the average DifficultyRating on each Spot R \<- σ Spoid=
    Spottid \^AVG(DiffucultyRating) \^ SpotId != SpotID R2 \< - π SpotId

9.  Select Administrators who approved all Spots that are categorized as
    "hand-rails" R \<- Admin ⋈NewSpot R2 \<- σ Admin.userName=
    Admin.userName \^ category = "hand-rails" ( R ) R3 \< - π
    Admin.username

10. Select users who have Likes/Comment more than 5 spots. R \<- User
    ⋈Interacts R2 \<- σ userName= userName \^Likes \> 5 \^ Comments \> 5
    ( R ) R3 \< - π userName

3.1 - Database Implementation 3.1.1 Background Information The main
purpose of relational database management software is to be able to
manage,store, query and retrieve data from a relational database. The
advantage of using a client-server RDBMS is that you don't have to worry
about storing your data, since it will be located on a server. They also
provide tools that help with creating tables and loading data into their
server. They also provide security features and reliability. The
disadvantages that come with a client-server RDBMS is that they host a
lot of people on the same server. If the server goes down you will not
be able to access your data. Unlike simpler storages that you backup and
access as you please. Client-servers also tend to be slower when
retrieving queries. It also costs more money since you are storing in a
table format(rows, columns) , because it takes more memory to store.
3.1.2 Schema and Hosting Our group, Rocket Power, chose to use MariaDB
for our RDBMS. 3.2 Sample Data 3.3 - Query Implementation For this
section, you will implement your queries from Phase 3 in SQL. For each
query: 1. list it in English, 2. then list the SQL SELECT statement that
implements it, 3. then list the actual results of the query on your
database. In addition, you should utilize or research the following SQL
features.

    (1) Aggregate functions: (2) GROUP BY, (3) GROUP BY with HAVING clause
    (4) ORDER BY, both ASCENDING and DESCENDING
    (5) Arithmetic operators: +, -, *, /; null operators: IS [NOT] NULL, [NOT] EXISTS
    (6) OUTER JOIN
    (7) Subqueries
    (8) DISTINCT
    (9) LIMIT 
    (10) CREATE TABLE .... AS SELECT ...; or CREATE TEMPORARY TABLE AS (akin to saving results of query as table to use like intermediate relations)

4 - Programming Logic for SQL 4.1 - Introduction View - A view is how
the user will see the database through the screen. For Admins there will
be a view that that will filter out none approved, so that they can
approve or deny them. They will also have a section where they can
approve, delete, new or old comments or tags. For users there will be a
view that will allow them to upload a new spot, comment, tags. They will
see a message that will show that the spot is under review. Stored
procedures/ Functions - A stored procedure/ function is how everything
will work in the background. For Admins they will be able to insert new
spots when approved, delete old spots or reviews. This would require
insert, delete, delete cascade, update cascade procedures. For users
they will be able to use the create procedure to make their account.
They will automatically be assigned a user id and the insert function
will put them as user with a userid. Triggers - Triggers are used to
update information when something is deleted or inserted. For Admins
they will mostly be using all the triggers like an approving/deleting
post will update the tables. For users they will have triggers where
they can change their username which will cause a new userid for them.
It will also cause a history trigger and a edit trigger.

4.2 - Syntax of Programming Logic Create Views 1) View for admins to
DROP VIEW IF EXISTS pending\_spots; CREATE VIEW pending\_spots AS SELECT
newspot.spot\_id, newspot.user\_id, coalesce(user.username,
"\[deleted\]") AS username, newspot.address, newspot.city,
newspot.sstate, newspot.submit\_date, newspot.difficulty\_rating,
newspot.description, newspot.approves FROM newspot LEFT JOIN user WHERE
newspot.approves = 0; ORDER BY newspot.submit\_date DESC;

2)  View where a user can view all approved spots they've submitted.
    DROP VIEW IF EXISTS user\_spots;

CREATE VIEW user\_spots AS SELECT newspot.spot\_id, newspot.user\_id,
newspot.address, newspot.scity, newspot.sstate, newspot.submit\_date,
newspot.difficulty\_rating, newspot.description FROM newspot LEFT JOIN
user ON newspot.user\_id = user.user\_id WHERE newspot.approves = 1
ORDER BY newspot.submit\_date DESC; Functions/Stored Procedures 1)
Procedure to be called so that a new user can get registered. DROP
PROCEDURE IF EXISTS RegisterUser;

CREATE PROCEDURE `RegisterUser` (uname varchar(30), passhash text,
uEmail varchar(30), FirstName varchar(30), LastName varchar(30), uCity
varchar(30), uState varchar(30), Sport varchar(30)) BEGIN START
TRANSACTION; SELECT COUNT(\*) INTO @duplicateCount FROM user WHERE
username = uname OR email = uEmail; IF @duplicateCount \> 0 THEN SELECT
NULL AS user\_id, "Username/email already exists" AS 'Error'; ELSE
INSERT INTO user(username, password, email, fname, lname, ucity, ustate,
sport) VALUES (uname, passhash, uEmail, FirstName, LastName, uCity,
uState, Sport); SELECT last\_insert\_id() AS user\_id, NULL AS 'Error';
END IF; COMMIT; END;

2)  Procedure to be called so that a user can view all approved spots.
    DROP PROCEDURE IF EXISTS GetSpots;

CREATE PROCEDURE `GetSpots`() BEGIN SELECT \* FROM newspots WHERE
approves = 1; END; 3) Procedure so that a user can submit a spot to be
approved by an admin. DROP PROCEDURE IF EXISTS AddSpot;

CREATE PROCEDURE AddSpot (param\_spot\_id int, param\_user\_id int,
param\_admin\_id int, param\_address varchar(100), param\_city
varchar(30), param\_state varchar(30), param\_submit\_date date,
param\_difficulty int, param\_description varchar(500), param\_approves
tinyint(1)) BEGIN SELECT COUNT(\*) INTO @adminCount FROM user WHERE
user\_id = param\_user\_id; INSERT INTO newspot(spot\_id, user\_id,
admin\_id, address, scity, sstate, submit\_date, difficulty\_rating,
description, approves) VALUES (param\_spot\_id, param\_user\_id,
param\_admin\_id, param\_address, param\_city, param\_state,
param\_submit\_date, param\_difficulty, param\_description,
param\_approves); SELECT last\_insert\_id() AS spot\_id, NULL as
'Error'; END;

Triggers DROP TRIGGER IF EXIST \_\_\_\_\_\_\_\_\_\_\_\_\_; DROP TRIGGER
IF EXIST\_\_\_\_\_\_\_\_\_\_\_\_\_\_;

CREATE TRIGGER \_\_\_\_\_\_\_\_\_\_\_\_\_\_; BEFORE DELETE ON
\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_ FOR EACH ROW BEGIN INSERT INTO
\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_(\_\_\_\_\_\_\_\_\_\_\_,\_\_\_\_\_\_\_\_\_\_\_)
SELECT \_\_\_\_\_\_\_\_\_\_\_\_\_,\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_ FROM
\_\_\_\_\_\_\_\_\_\_\_\_\_\_ WHERE \_\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_ =
\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_\_ END

4.3 - Implementation 4.3.1 - Views In this section, you will implement
at least 3 views for your project: 1. A view for a table with certain
query conditions. Unable to add this view... 2. A view for a join
between at least two tables.

3.  A view for joins between at least three tables. Unable to add this
    view... For each view, show the SQL command used to create it, a
    SELECT statement to query the view, and the results from the view
    that are returned.

Unable to get to it due to time constraints...

4.3.2 - Stored procedures/functions In this section, you will implement
3 stored procedures or functions: 1. A stored procedure for inserting a
new record into one of your tables. The field values are passed to the
procedure through the input parameters.

2.  A stored procedure for deleting an existing record based on the
    primary key of your selected table. Unable to get to it due to time
    constraints...
3.  A stored procedure which returns statistical metrics for a table
    over a period of time: average sales of the last month, inventory
    item most ordered, highest-paying customer, etc. Unable to get to it
    due to time constraints... These stored procedures are meant to
    consolidate relatively complex database operations (e.g. a user
    registering a new account) as atomic transactions that, whether they
    succeed or fail, maintain database integrity. Look into TRANSACTION,
    COMMIT, and ROLLBACK when implementing these. For your report,
    provide the SQL command used to create each stored procedure, and
    evidence of its functionality. That is, show the relevant contents
    of the tables before and after execution of a stored procedure, as
    well as the call to execute the stored procedure.

Unable to get to it due to time constraints... 4.3.3 - Triggers Unable
to get to it due to time constraints...

5 - GUI Development In this phase, your team will create a front-end
application for your database with a GUI that supports functionality for
at least 2 user groups (e.g. customers and managers will have different
controls). You are allowed to have separate applications/GUIs for the
user groups, but it is not required. You must satisfy the following
requirements: 1. Working GUI application with support for at least 2
different user groups (e.g. customers and employees) \* Admins can log
in and check spots to approve and delete \* Users can log in and look at
spots and add spots 2. The GUI must support CRUD data operations and
report generation. CRUD: create, read, update, delete. Examples: \*
Create: adding new products to inventory \* Read: displaying a list of
products \* Update: changing the price of a product \* Delete: removing
a product \* Report generation should be able to show aggregate data:
averages over time, items sold in the last month, etc. \* Formatting can
be flexible: if you can display it on a web page, then it can be
exported to file using various options: \* export CSVs, \* saving HTML
files \* "Print to PDF" in the browser, \* For PHP, FPDF is amazing:
http://www.fpdf.org/ \* (Links to an external site.) \* 3. The GUI must
make use of server-side database programming such as views, stored
procedures/functions, and triggers. 4. The GUI should display at least
one query that uses aggregate functions and grouping. This can be the
same source of data for report generation. 5. The application should
directly or indirectly use all of your database tables - whether through
joins, views, stored procedures/functions, etc. 6. You are encouraged to
use integrated development environments (IDEs) such as Microsoft Visual
Studio, NetBeans, VS Code/Atom. 5.1 - GUI Functionalities and User
Groups 5.1.1 - Itemized Descriptions of the GUI Our GUI in the main
index page first requires the user to login if they have an existing
account or register their user account to the database. Once logged in,
the user is greeted with the homepage. From there, they will be able to
navigate to different pages using the navigation tabs at the top left of
the page, such as Spots submitted by other users, Spots that the users
submitted themselves and a page to submit a New Spot for administrators
to review and approve. If a user wants to go ride or check out a certain
spot, they can select a spot from the Spots page and will be given more
details to the Spot, such as address, rating and difficulty. 5.1.2 -
Screenshots and Walkthrough \* First and foremost, users must login...\
\* ... or register an account to the database.\
\* Once logged in, the user will be able to access the main index along
with other functionalities such as...\
\* ... viewing other user submitted spots...\
\* ... spots that the user has submitted themselves (their profile) ...\
\* ... and finally... ... a page that is not finished and works
sometimes!! 5.1.3 - Demonstration of Programming Logic Give context for
the user group's use of the GUI - which tables/views/procedures/triggers
are used with respect to the user group's operations? The regular user
is able to \* View: \* users from the user table \* Spots from the spot
table \* Procedures: \* Add Spots to to the Spot page \* Like, comment,
and favorite Spots \* Add other users as Friends \* Triggers: \* Delete
a spot (that the user submitted) from the Spot table \* Remove a friend
that they added

5.2 - GUI Programming 5.2.1 - Server-side Programming For each view and
procedure/function, describe its intended purpose, where it gets used,
and by whom. List the code or a screenshot and describe their purposes.
If any of this is already listed in a previous Phase, you can just refer
to the section or page that contains it. Any new database functionality
you create for Phase 5 should be provided here. In procedures.sql:

In register.php:

In procedures.sql:

In submit\_spot.php:

5.2.2 - Middle-tier Programming

5.2.3 - Client-side Programming \* Local searching and sorting. Unable
to get to it due to time constraints... \* Viewing and saving reports
from queries to a file. \* Visualization of query results can be quite
interesting. For example, your GUI could generate a bar chart based on
sales volume, or a pie chart showing total hours spent on different
department projects. Unable to get to it due to time constraints... \*
Loading, parsing, and/or validating data to insert into the database.
Unable to get to it due to time constraints... \* Anything else you're
particularly proud of.
