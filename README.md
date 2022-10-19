# Introduction :

Today we will talk about the project of the seniors that the teacher gave us to develop further. We have seen that some functions that seniors do. There are some bugs, such as no password reset button. meaningless quran invisible font color Some verses are not read. So we want to continue to make it better. So we have extracted from the existing database and put it in and have fixed the font color and background to be more clear. As for the features that we have added it's reset password funtion and quran vocab for user can read in our website. 


# Problem Definition :

Problems or bugs with this website are Can't change password When the user wants to change the password Maybe in case someone knows the user's password. make the user want to change It can't be changed. For this reason, we added a password change function and also added a Thai language meaning and quran vocab Because it is necessary for Muslims to understand what allah said in the Quran.

# Objective :
#### Reset password feature
- For convenience when users want to change their password
- to respond when the user forgets the password
#### Thai translation feature
- for users to know and understand the meaning of each verse
- for readers to use in daily life
- for Thai users to understand
#### Quran audio feature
- for users can listen
- for guideline to learn how to read correctly according to Tajweed.
#### Quran Vocab feature
- for Muslims to understand and know what Allah says in the Quran
- to practice memorizing the words in the Quran


# Software Requirement : 
| Software  | Version   |
|---------  |---------  |
| Laravel   |  8.1      |
| php       | 7.4.19    |
| Laragon   | 5.0.0     |
| Vs code   |1.72.0     |

# Requirement :

Our requirement is for password reset function. for user convenience In case the user wants to change the password Maybe you don't want anyone to know your old password. Or the old password might be difficult to remember for whatever reason. Users can reset or change their password instantly. and also if the user wants to know the meaning Users can immediately access the meaning in the website and user can also press azkar button and read it.


# Constraints :

The limitation of the password reset function that we have done is Let users access our website quran if you forget your password or want to change your password, you can press reset and change your password right away. After that, the system will change the password for the user. After the system completes.


# Software Method :

- Use Case Diagram 
- Data Flow Diagram
- Activity diagram
- Class Diagram


## Use Case Diagram :
A use case diagram is a visual representation of how users interact with the various systems that make up a larger system. The main goal of designing a use case diagram is to fully describe the system's functionality and to solicit user requests. This is regarded as where system analysis and design should begin.

![image](https://user-images.githubusercontent.com/96815487/196363262-c7f6abba-1ef9-4c3d-90eb-cf8ebd4ce107.png)

![Screenshot 2022-10-19 013002](https://user-images.githubusercontent.com/96815451/196642941-0b7024f1-ddbf-4c9b-a168-6aed8fc8b132.png)


## Data Flow Diagram :
A data flow diagram demonstrates the path that information takes through a system or process. It contains the numerous subprocesses the data flows through, data inputs and outputs, and data stores.

![image](https://user-images.githubusercontent.com/96815487/196363323-4a0fb2f9-4e2e-4ebc-9d7d-96c6a4238afc.png)


## Activity diagram :
Activity diagrams are a method for describing work flow, business processes, and procedural logic. They serve a similar purpose to flowcharts in many aspects, but the main distinction between the two is that they permit parallel behavior.

![image](https://user-images.githubusercontent.com/96815487/196363416-5467a766-a7a7-47cd-b427-e7dbaa662fc2.png)


## Class Diagram :
Class diagrams are the blueprints of your system or subsystem. We can use class diagrams to model the objects that make up the system, to display the relationships between the objects, and to describe what those objects do and the services that they provide.

![image](https://user-images.githubusercontent.com/96815487/196363500-7fdf9f1b-40cb-42bb-ac4f-5e7129ebfb33.png)

# Source code :

## Veiw file :

We have used bootstrap to create a table and retrieve the data from the database and display it as rows.

![MLP 3](https://user-images.githubusercontent.com/96815451/196614015-12df2a04-be59-4296-a128-8acdc867d3a7.png)

## Route :

Its main function is to provide a route for users to access the desired page through a URL.

![MLP 4](https://user-images.githubusercontent.com/96815451/196614689-c471591f-84c1-4450-b128-90b287f7bfb2.png)

## Migrate file :

It is a file used to create tables through the terminal and send them to the database. with the order $ php artisan serve make:model (name table) -m

![MLP 5](https://user-images.githubusercontent.com/96815451/196614841-65745839-61bd-4338-9550-2236cbfc3afc.png)

## Model file :

The model file is responsible for connecting to the database.

![MLP 6](https://user-images.githubusercontent.com/96815451/196615143-c7f7116d-9b90-451b-86aa-784d9706106b.png)

## Controller file :

The controller is responsible for processing. Receive user requirements and extract data from database. to send to users

![MLP 7](https://user-images.githubusercontent.com/96815451/196615239-8352fefa-594c-48d4-bae4-e01b7ffdbd92.png)

## Data base :

This is a database that we have created to include information about Vocabulary in the Qur'an

![MLP 8](https://user-images.githubusercontent.com/96815451/196615301-636a2fc6-a75b-4638-83c6-6a4f40b631e5.png)

# User Interface Design :
: Homepage 

![MLP 1](https://user-images.githubusercontent.com/96815451/196613074-e5aed631-25c9-4b02-bf09-597f29c7fc27.png)

: Login Page 

![image](https://user-images.githubusercontent.com/96815487/196363877-81eaa878-fccc-47d3-8943-2f737debcc3e.png)

: Put Email to reset password Page

![image](https://user-images.githubusercontent.com/96815487/196363960-b7d6cf59-2083-4bf6-9d77-70ada36a6b26.png)

: Receive link to reset password

![image](https://user-images.githubusercontent.com/96815487/196364057-c84d1add-fa8a-482d-ab9a-c9661cb4f9fe.png)

: Reset Password Page 

![image](https://user-images.githubusercontent.com/96815487/196364206-899106a3-845e-4087-bc5f-f1d10ae10300.png)

: Quran vocabulary page

![MLP 2](https://user-images.githubusercontent.com/96815451/196613631-339f1df8-6459-4a9f-8e63-42e7fce4b6b3.png)


# Conclutsion :

  Our project summary is We have seen some flaws in the project. So we added some functions and added some things to the project. 
That is to add a password reset function, add quran vocab, edit background and alphabet color for more clear on website, add meaning thai of quran, and add audio for each verses. Finally, all of this that we have added. It is to provide users with the most convenient use of our website.
