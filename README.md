<div align="center">

  <a id="english"></a>
  <h1>Welcome to Project Euler</h1>
  <p>A project to help developers learn and practice Java</p>

  [![EN](https://img.shields.io/badge/English-🇬🇧-blue)](#english)
  [![RU](https://img.shields.io/badge/Русский-🇷🇺-red)](#russian)
  ![Version 0.1.0](https://img.shields.io/badge/Version-0.1.0-orange.svg)
  ![Stars](https://img.shields.io/github/stars/AlexandrAnatoliev/project-euler.svg?style=flat)
  ![Forks](https://img.shields.io/github/forks/AlexandrAnatoliev/project-euler.svg?style=flat)
  [![PR:s Welcome](https://img.shields.io/badge/PR:s-welcome-brightgreen.svg)](https://github.com/AlexandrAnatoliev/project-euler/pulls)
  [![First Contributors](https://img.shields.io/badge/first-contributors-brightgreen.svg)](https://github.com/AlexandrAnatoliev/project-euler/pulls)
  ![GitHub repo size](https://img.shields.io/github/repo-size/AlexandrAnatoliev/project-euler)
  
  <p>
    <br>
    <a href="https://projecteuler.net/archives">Project Euler</a> 
      is a series of challenging mathematical/computer 
      programming problems that will require more 
      than just mathematical insights to solve. 
      Although mathematics will help you arrive 
      at elegant and efficient methods, the use 
      of a computer and programming skills will 
      be required to solve most problems.
      <br><br>
      Practice Java coding and contribute to a 
      real open-source project by making your 
      first pull request here!
  </p>
</div>

  > **Author:** Alexandr Anatoliev

  > **GitHub:** [AlexandrAnatoliev](https://github.com/AlexandrAnatoliev)

---

<div align="center">
  <h2>Table of Contents</h2>
</div>

* [Setup Instructions](#setup-instructions)
* [Problems](#problems)
* [Submitting Your Changes](#submitting-your-changes)
* [Influences](#influences)
* [Contact](#contact)
* [Requirements](#requirements)
* [List of Contributors](#list-of-contributors)

---

<div align="center">
  <a id="setup-instructions"></a>
  <h2>Setup Instructions</h2>
</div>

1. Fork this repository by clicking on the "Fork" 
  button at the top-right corner of this page. 
  This creates a copy of the repository in your 
  GitHub account.

<div align="center">
  <img src="/images/fork-button.png">
</div>
<br>

2. Clone your forked repository by clicking the 
  "Code" button:

<div align="center">
  <img src="/images/code-button.png">
</div>
<br>

That will open this small window:

<div align="center">
  <img src="/images/clone-window.png">
</div>
<br>

After that you can copy and paste the URL to 
  your local machine with the command:

```bash
git clone https://github.com/<your-username>/project-euler.git
```

3. Navigate to your project folder:

```bash
cd project-euler
```

4. Add a reference to the original repository for 
  future updates:

```bash
git remote add upstream https://github.com/AlexandrAnatoliev/project-euler.git
```

(Remember to keep here the original repository URL, 
  not your forked one, so the username in this 
  needs to be `AlexandrAnatoliev`, not your 
  own username.)

5. Check the remotes for this repository:

```bash
git remote -v
```

You should now see the origin and upstream 
  remotes listed.
``` 
origin  https://github.com/<your-username>/project-euler.git (fetch)
origin  https://github.com/<your-username>/project-euler.git (push)
upstream        https://github.com/AlexandrAnatoliev/project-euler.git (fetch)
upstream        https://github.com/AlexandrAnatoliev/project-euler.git (push)
```

6. Take a pull from the upstream repository 
to your main branch to keep it in sync with 
the main project:

```bash
git pull upstream main
```

7. Create a new branch with the command:

```bash
git switch -c fix-issue
```

Now you are ready to start working on the issues!
Remember every once in a while to pull from the 
upstream repository to keep your local repository 
up to date with the main project.

_Note: I recommend to always create new branch 
with each Issue you solve! Otherwise the pull 
requests will get too large and there could be 
possible merge conflicts._

---

<div align="center">
  <a id="problems"></a>
  <h2>Problems</h2>
</div>

Project Euler consists of over 800 several problems 
with varying difficulty. You can choose which 
problem you want to work on and solve. You can 
also choose to solve multiple problems if you like. 
Just remember to create a new branch for each 
problem you solve.

First, select which problem you want to work 
with and open the `Problem` directory:
```
project-euler 
├── Problem1/
│   └── README.md
├── Problem2/
│   └── README.md
├── Problem3/
│   └── README.md
└── README.md
```

Go to the README file of the selected problem 
to get more info about the issue.

Create directory for your solution in format:
```
Solution[problem number]-[your github nickname]/
```

For example:
```
project-euler 
├── Problem1/
│   ├── Solution1-User1/
│   ├── Solution1-Username2/
│   ├── Solution1-IvanIvanov/
│   │     ^
│   │     └── directory for your solution
│   └── README.md
├── Problem2/
│   ├── Solution2-User1/
│   └── README.md
└── README.md
```
After that you are ready to start solving!

Add your source files inside 
(Adding README.md is appreciated)  

Please keep the repository organized by 
following these formats:

```
Solution1-YourGithubName/
├── Main.java       // Your source code
│   └── Main.java
└── README.md       // (Optional) Short description or usage guide 
```   

Or (some classes):

```
Solution1-YourGithubName/
├── src/           // Your source code
│   ├── Class1.java
│   ├── Class2.java
│   └── Main.java
└── README.md      
```   

Or (add tests):

```
Solution1-YourGithubName/
├── src/           
│   ├── main/           // Your source code
│   │   ├── Class1.java
│   │   ├── Class2.java
│   │   └── Main.java
│   └── test/           // (Optional) tests 
│       ├── Class1Test.java
│       ├── Class2Test.java
│       └── MainTest.java
└── README.md      
```   

_Note: Avoid unnecessary files (no compiled 
binaries or IDE metadata) and  make sure your 
solution application runs properly._

All valid solutions will be reviewed and merged.

_Note: You don't have to ask for permission 
to start solving the issue or get assigned, 
since these issues are supposed to always 
be open for new contributors. You can just 
simply start working on the issue right away! 
Remember that in real world issues you would 
usually need to ask to get assigned to certain 
issue to prevent multiple people from working on 
the same issue at the same time, which would 
result in some contributors wasting their time._

---

<div align="center">
  <a id="submitting-your-changes"></a>
  <h2>Submitting Your Changes</h2>
</div>

Once you've made the necessary changes requested 
in the problem, you're ready to submit your changes!

1. Stage your changes with the command:

```bash
git add files-that-you-changed
```

2. Commit your changes with the command:

```bash
git commit -m "Fixed issue"
```

3. Push your changes to your forked repository 
with the command:

```bash
git push origin fix-issue
```

Once you've pushed your changes to GitHub, 
you're ready to create a pull request. 
Go to your forked repository on GitHub.

- You should see message "fix-issue had recent pushes" 
(or whatever your branch name is) and button 
"Compare & pull request" next to it.

<div align="center">
  <img src="/images/compare-and-pull-request.png">
</div>
<br>

- Click the "Compare & pull request" button 
to proceed to the pull request page of the original 
project-euler repository.

<div align="center">
  <img src="/images/compare-and-pull-request-button.png">
</div>
<br>

- Fill in the title and description boxes 
with details about the problem and 
how you got it to work. You can also add some 
additional information such as screenshots, 
if you want.

<div align="center">
  <img src="/images/title-and-description-boxes.png">
</div>
<br>

- Finally, click "Create pull request" to finish 
creating the pull request.

<div align="center">
  <img src="/images/create-pull-request-button.png">
</div>
<br>

Congratulations on making your first open source 
contribution on GitHub!

Sit back and wait for feedback 
on the pull request. If everything is 
fine, you should get the pull request merged. 
If not, you will be requested to make changes 
to your code.

Remember to wait for me to review your pull 
request, do not close it yourself.
If you are asked to make changes, you can do 
so by committing them to the same branch, 
there is no need to close the current Pull 
Request and open a new one.

---

<div align="center">
  <a id="influences"></a>
  <h2>Influences</h2>
</div>

This project was inspired by a number of 
fantastic resources designed to help newcomers 
make their first contributions to open source. 
In particular, I would like to acknowledge:

- [Fork, Commit, Merge](https://github.com/fork-commit-merge/fork-commit-merge): 
A project designed to help you familiarize 
yourself with the open source contribution 
workflow on GitHub, as well as to help you learn 
the basics of programming with different languages, 
libraries and frameworks.

I highly recommend checking out these projects 
if you want to learn more about contributing 
to open source!

---

<div align="center">
  <a id="contact"></a>
  <h2>Contact</h2>
</div>

For any queries, feel free to open an issue 
or reach out to me at per-1986@list.ru.

---

<div align="center">
  <a id="requirements"></a>
  <h2>Requirements</h2>
</div>
 
* Java installed

---

<div align="center">
  <a id="list-of-contributors"></a>
  <h2>List of Contributors</h2>
</div>

Massive thanks to all the fine individuals 
who contributed to this project!

<a href="https://github.com/AlexandrAnatoliev"><img src="https://images.weserv.nl/?url=https://avatars.githubusercontent.com/u/116306656?v=4&h=300&w=300&fit=cover&mask=circle&maxage=7d" width="80px"/></a>

---

<div align="center">
  <a id="russian"></a>
  <h1>Добро пожаловать на Project Euler</h1>
  <p>Проект помогающий изучить и попрактиковать конструкции языка Java</p>

  [![EN](https://img.shields.io/badge/English-🇬🇧-blue)](#english)
  [![RU](https://img.shields.io/badge/Русский-🇷🇺-red)](#russian)
  ![Version 0.1.0](https://img.shields.io/badge/Version-0.1.0-orange.svg)
  ![Stars](https://img.shields.io/github/stars/AlexandrAnatoliev/project-euler.svg?style=flat)
  ![Forks](https://img.shields.io/github/forks/AlexandrAnatoliev/project-euler.svg?style=flat)
  ![GitHub repo size](https://img.shields.io/github/repo-size/AlexandrAnatoliev/project-euler)
  
  <p>
    <br>
    <a href="https://euler.jakumo.org/problems">Проект Эйлер</a> — это серия сложных математических и вычислительных задач, 
    для решения которых недостаточно одних только математических знаний. 
    Хотя математика поможет находить изящные решения, 
    большинство задач потребуют навыков программирования для их практической реализации.
    <br><br>
    Этот репозиторий предоставляет уникальную возможность:
    <li>Попрактиковаться в решении задач Project Euler на Java</li>
    <li>Поучаствовать в реальном open-source проекте</li>
    <li>Создать свой первый пул-реквест</li>
  </p>
</div>

  > **Author:** Alexandr Anatoliev

  > **GitHub:** [AlexandrAnatoliev](https://github.com/AlexandrAnatoliev)

---
