
# **Learning to use AI tools effectively to assist in coding and problem-solving.**

## **Table of Contents**

- [Essential Things in One Prompt](#essential-things-in-one-prompt)
    - [Task](#1-task)
    - [Context](#2-context)
    - [Exemplar](#3-exemplar)
    - [Persona](#4-persona)
    - [Format](#5-format)
    - [Tone](#6-tone)
- [Question strategies for AI use](#features)
    - [Q&A Strategy Prompting](#1-qa-strategy-prompting)
    - [Pros and Cons Prompting](#2-pros-and-cons-prompting)
    - [Stepwise Chain of Thought Prompting](#3-stepwise-chain-of-thought-prompting)
    - [Role Prompt](#4-role-prompt)
- [References](#installation)
    - [YouTube](#youtube)

## **Essential Things in One Prompt**

> **Formula for a good prompt**:
> **\[Task] + \[Context] + \[Exemplar] + \[Persona] + \[Format] + \[Tone]**


### **1. <u>Task</u>**

Always start the task sentence with an **action verb** (e.g., *Generate, Write, Analyze, Create, Recommend*).

* #### One **simple** task:

> **Generate** a 3-month training program for me to follow.

* #### **Multi-task** request:

> **Analyze** the collected user feedback from an event we just ran, **summarize** the top 3 takeaways with a focus on business impact, and **categorize** the rest based on the team responsible.


### **2. <u>Context</u>**

Providing enough context helps the AI give relevant, accurate, and tailored responses.

Ask yourself:

1. What is the user's **background**?
2. What does **success** look like?
3. What **environment** are they in?

* #### Example:

> I'm a **70kg male** looking to **gain 5kg of muscle mass** over the next 3 months.
> I can go to the **gym twice a week for 1 hour**.
> Create a 4-month training plan tailored to this.

### **3. <u>Exemplar</u>**

Give a **sample output** or show how the result should look to reduce ambiguity.

* #### Example:

> I want the output to look like this:
>
> | Week | Day | Workout | Sets | Reps |
> | ---- | --- | ------- | ---- | ---- |
> | 1    | Mon | Squats  | 4    | 10   |


### **4. <u>Persona</u>**

Define how the AI should “behave” in the response. Should it sound like a coach? A scientist? A teacher?

* #### Example:

> Act as a **personal trainer** with a background in **sports nutrition**.
> Speak like you're coaching a beginner.


### **5. <u>Format</u>**

Tell the AI how you want the result to be structured.

* Table? Bullet points? Paragraphs? Code block?

* Should it return just the final result or also explain how it got there?

* #### Example:

> Give the program in **a Markdown table** and explain each exercise in **1-2 sentences** below the table.

### **6. <u>Tone</u>**

Choose the emotional feel or professionalism of the output.

* Friendly, motivational, humorous, formal, concise, academic?

* ####  Example:

> Use a **motivational and friendly tone** like a gym coach who’s cheering me on.


###  Final Prompt Example (putting it all together):

> **Generate** a 3-month workout plan.
> I’m a **70kg male** aiming to **gain 5kg of muscle**. I can train **twice a week** for an hour.
> Format it in a **Markdown table** with sets and reps, and give short explanations after each table.
> Act like a **friendly personal trainer** with experience in strength training.
> Keep the tone **motivational and supportive**.
> Here’s a sample table for formatting:
> \| Week | Day | Exercise | Sets | Reps |

## **Question strategies for AI use**

### **1. <u>Q&A Strategy Prompting:</u>**

This type of prompting is used to tell the AI to ask us YES/NO questions to better understand our needs and provide us with the most accurate answer. This is useful when we want to get a clear understanding of a specific topic or concept.

### **Advantages**

#### For the **User**:

* **Clarifies the goal**: Helps users refine what they actually want or need before the AI gives a response.
* **Saves time**: Prevents back-and-forth caused by vague or incomplete prompts.
* **Customization**: Leads to answers tailored to the user’s specific context.
* **Confidence**: Users feel guided and supported during complex decisions.

#### For the **AI**:

* **Reduces ambiguity**: Yes/No answers reduce confusion about user intent.
* **Efficient prompting**: Enables the AI to deliver more relevant, structured, and accurate output.
* **Scalability**: Makes complex decision trees easier to handle step-by-step.


###  **Disadvantages**

#### For the **User**:

* **Slower start**: Initial progress may feel delayed while answering multiple questions.
* **Over-simplification**: Yes/No format may not cover nuanced or in-between cases.
* **Effort required**: Requires user engagement and willingness to interact, which might not suit all users.

#### For the **AI**:

* **Limited detail**: Binary responses can restrict depth if the user doesn’t elaborate.
* **Dependency**: The AI must rely on user cooperation — without clear answers, it can’t proceed well.
* **No context history**: If responses are too short, the AI might miss important context unless it asks follow-ups.

### **Example**

_**Prompt:**_ 

```markdown
I want to create a PHP GymMembershipApp program, but I don’t know how to structure the directories. Could you suggest a directory structure? Before that, please ask me yes/no questions so I can clarify my needs.
```

_**Answer:**_ 

```markdown
Great! I’ll help you design a clean directory structure for your PHP GymMembershipApp. Before I suggest anything, let me ask some yes/no questions to understand your needs better:

 1. Will your app use object-oriented programming (OOP) with classes and namespaces?
 2. Do you plan to use Composer for autoloading and package management?
 3. Will your app have different types of users (e.g., members, admins)?
 4. Do you want to separate your app logic into layers like Models, Views, and Controllers?
 5. Will your app connect to a database (e.g., MySQL)?
 6. Do you plan to have a web frontend with HTML/CSS/JS served by PHP?
 7. Will you use any external libraries or frameworks (like Slim, Laravel, etc.)?
 8. Do you want to keep tests for your code inside the project?
 9. Will you create CLI scripts (command-line scripts) as part of your app?
 10. Do you want to store configuration files separately from your code?

Answer YES or NO to these, and I’ll help you tailor the structure!
```
_**Prompt:**_ 

```markdown
yes, yes, yes, yes, no, yes, no, no, no, yes.
```

_**Answer:**_ 

```markdown
Thanks for your answers! Here’s what you said:

 1. OOP with classes and namespaces — yes
 2. Use Composer — yes
 3. Different user types — yes
 4. Separate logic into MVC — yes
 5. No database connection — no
 6. Web frontend with PHP serving HTML/CSS/JS — yes
 7. No external frameworks — no
 8. No tests inside the project — no
 9. No CLI scripts — no
 10. Configuration files separate — yes

Suggested directory structure for your GymMembershipApp:


GymMembershipApp/
├── config/                 # Configuration files (database config, app settings, etc.)
│   └── app.php             # Main config file
├── public/                 # Public web root (served by the web server)
│   ├── index.php           # Front controller (entry point)
│   ├── css/                # CSS files
│   ├── js/                 # JavaScript files
│   └── images/             # Images for frontend
├── src/                    # Source code with classes and namespaces
│   ├── Controllers/        # Controller classes handling requests
│   ├── Models/             # Model classes (business logic, data structures)
│   └── Views/              # PHP files with HTML templates
├── vendor/                 # Composer dependencies (auto-generated)
├── composer.json           # Composer config file
└── README.md               # Project description and instructions


Explanation:

config/  — for configuration, like app-wide settings and any future database configs. Keeps sensitive info separate from source code.
public/ — web server points here. All requests start from `index.php`. CSS, JS, images for your frontend go here.
src/ — your OOP PHP code organized by MVC: Controllers handle user input, Models handle logic/data, Views render HTML.
vendor/ — Composer will manage third-party libraries here (even if now you don’t use any, Composer creates it).
composer.json — Composer config, autoload setup, dependencies.
README.md — document your project.
```


### **2. <u>Pros and Cons Prompting</u>**

This type of prompting is used to tell the AI to list out the pros and cons of a given topic. This is useful when we want to understand the advantages and disadvantages of a particular approach or solution.

### **Advantages**

#### For the **User**:

* **Clear comparison**: Helps users easily see both benefits and drawbacks of a topic or solution.
* **Better decision-making**: Enables informed choices by weighing pros and cons side-by-side.
* **Time-saving**: Quickly summarizes complex information in a digestible way.
* **Encourages critical thinking**: Invites users to consider multiple facets rather than one-sided views.

#### For the **AI**:

* **Structured output**: Provides a clear format that is easy to generate and organize.
* **Focused responses**: Helps AI produce balanced and relevant content quickly.
* **Consistency**: Can standardize the response style for comparison tasks.
* **Adaptability**: Works well for many different topics or problem types.


### **Disadvantages**

#### For the **User**:

* **Oversimplification risk**: May reduce complex issues into too simplistic pros and cons.
* **Lack of nuance**: Important subtleties might be missed if they don’t fit neatly into pros or cons.
* **Generic answers**: Without specific context, responses can be broad or less useful.
* **Potential bias**: Some pros or cons may be overstated or understated.

#### For the **AI**:

* **Limited depth**: Difficult to convey detailed or layered reasoning within pros/cons format.
* **Repetition risk**: Can produce repetitive or surface-level points if prompt is vague.
* **Prompt dependency**: Requires clear instructions to balance points fairly.
* **Context loss**: Might miss important context if it doesn’t clearly belong to pro or con.

### **Example**

_**Prompt:**_ 

```markdown
How can I show the perks of the premium plan in my application?
Show me different approaches (e.g., using inheritance, composition, configuration files, etc.), and list the pros and cons for each approach.
```

_**Answer:**_ 

```markdown
Great question!

You want to show perks of the premium plan in your `PremiumMember` class (or in your app in general). Below are several approaches you can take, with pros and cons for each. They vary in terms of flexibility, design principles, and scalability.

Approach 1: Define a method in `PremiumMember` that returns a hardcoded list of perks

php
public function getPerks(): array
{
    return [
        'Access to VIP lounge',
        'Unlimited classes',
        'Free personal trainer session',
        'Priority booking',
    ];
}


✔ Pros:

    - Simple and fast to implement
    - Easy to read and test
    - Self-contained in the class

X Cons:

    - Perks are **hardcoded**, so you must update the code to change them
    - Not reusable for other plans (e.g., Gold, Platinum)
    - Not ideal for dynamic or growing systems


Approach 2: Load perks from a config file (`config/plans.php`)

config/plans.php:

return [
    'premium' => [
        'Access to VIP lounge',
        'Unlimited classes',
        'Free personal trainer session',
        'Priority booking',
    ],
];

In `PremiumMember`:

php
public function getPerks(): array
{
    $plans = require __DIR__ . '/../../config/plans.php';
    return $plans['premium'] ?? [];
}


✔ Pros:

    - Centralized config, easily editable without touching code
    - Allows multiple plan types in one file
    - Can be reused by other parts of the system (e.g., admin panel, frontend)

X Cons:

    - Less OOP-pure: relies on external data source
    - Slightly slower due to file loading
    - No validation/structure unless enforced


Approach 3: Store perks as a property inside the class

php
protected array $perks = [
    'Access to VIP lounge',
    'Unlimited classes',
    'Free personal trainer session',
    'Priority booking',
];

public function getPerks(): array
{
    return $this->perks;
}


✔ Pros:

    - Keeps perks visible and structured inside the class
    - Easier to override in subclasses or mock in tests
    - Cleaner than hardcoding them inside methods

X Cons:

    - Still requires code change to update perks
    - Not separated from logic (mixing data with class behavior)



Approach 4: Use a `Plan` class (Composition)

Create a separate `Plan` class that holds perks:

php
class Plan
{
    public function __construct(protected string $type) {}

    public function getPerks(): array
    {
        return match ($this->type) {
            'premium' => ['Access to VIP lounge', 'Unlimited classes', 'Trainer', 'Priority booking'],
            default => [],
        };
    }
}


In `PremiumMember`:

php
protected Plan $plan;

public function __construct()
{
    $this->plan = new Plan('premium');
}

public function getPerks(): array
{
    return $this->plan->getPerks();
}


✔ Pros:

    - Clean separation of responsibilities
    - Follows **composition over inheritance**
    - Easier to extend with new logic (e.g., pricing, features)

X Cons:

    - More complex setup
    - Requires more files and boilerplate
    - Might feel overkill for simple apps


Approach 5: Store perks in a database (e.g., `plans` table)

Table: `plans`

| id | name    | perk                  |
| -- | ------- | --------------------- |
| 1  | premium | Access to VIP lounge  |
| 1  | premium | Unlimited classes     |
| 1  | premium | Free personal trainer |


In `PremiumMember`:

php
public function getPerks(): array
{
    // Assume you already have a database connection class
    return $this->db->getPerksForPlan($this->membership);
}


✔ Pros:

    - Data-driven — can be updated via admin panel or CMS
    - Scalable for many membership types
    - Cleaner separation of data and logic

X Cons:

    - Requires database setup
    - Slower (needs DB query)
    - More complexity (models, migrations, etc.)


Summary Table

| Approach                    | Pros                                   | Cons                               |
| --------------------------- | -------------------------------------- | ---------------------------------- |
| 1. Hardcoded method         | Simple, direct                         | Not reusable, not scalable         |
| 2. Config file              | Centralized, reusable                  | External dependency, no validation |
| 3. Property in class        | Cleaner than method, easy to mock/test | Still hardcoded                    |
| 4. Plan class (Composition) | OOP best practice, extendable          | More setup, more files             |
| 5. Database-driven          | Dynamic, scalable, real-world ready    | Needs DB, adds complexity          |


If you tell me more about how you want the user to see or access the perks (in terminal, web page, etc.), I can also show you how to render them.

Do you want that?
```



### **3. <u>Stepwise Chain of Thought Prompting:</u>** 

This type of prompting is used to tell the AI to break down a complex problem into smaller, manageable steps and provide a detailed explanation of each step. This is useful when we want to understand the thought process behind a solution or when we want to solve a complex problem.

### **Advantages**

#### For the **User**:

* **Better understanding**: Breaks complex problems into clear, digestible steps, making solutions easier to follow.
* **Transparency**: Shows the AI’s reasoning process, which builds trust and clarity.
* **Learning aid**: Helps users learn problem-solving methods and logic behind solutions.
* **Error spotting**: Easier to identify and correct mistakes in individual steps.

#### For the **AI**:

* **Structured output**: Allows the AI to organize information logically and sequentially.
* **Focus on details**: Enables thorough explanation of each part of a problem.
* **Modularity**: Each step can be updated or improved independently.
* **Flexibility**: Suitable for diverse topics requiring multi-step reasoning.


### **Disadvantages**

#### For the **User**:

* **Longer responses**: Detailed breakdowns can be time-consuming to read.
* **Complexity overload**: Users unfamiliar with the topic might still feel overwhelmed by too much detail.
* **Patience needed**: Requires willingness to go through multiple steps rather than quick answers.

#### For the **AI**:

* **Increased resource use**: Generating step-by-step explanations may consume more time and computational resources.
* **Risk of verbosity**: AI may produce unnecessarily lengthy or redundant steps if not carefully guided.
* **Dependency on prompt clarity**: Without clear instructions, the AI might miss key steps or explanations.
* **Context fragmentation**: Breaking down too much might cause loss of overall context or coherence.

### **Example**

_**Prompt:**_ 

```markdown
I want to create a GymMembershipApp. Please guide me through the development process step by step. After each step, wait for me to type the keyword 'next' before continuing to the next step.
```

_**Answer:**_ 

```markdown
Perfect! Let's build your GymMembershipApp step by step.


Step 1: Project Folder and Initial Setup

1.1. Create the main project folder:

Create a directory for your app. You can name it whatever you want, e.g.: GymMembershipApp/

1.2. Inside it, create these subfolders:

GymMembershipApp/
├── config/                 # Configuration files
├── public/                 # Web root
├── src/                    # PHP source code (Models, Views, Controllers)
├── vendor/                 # (Created by Composer)

1.3. Create these initial files:

    - `GymMembershipApp/public/index.php` → this will be your entry point.
    - `GymMembershipApp/composer.json` → for managing autoload and dependencies.
    - `GymMembershipApp/config/app.php` → placeholder config file.

1.4. Run Composer init:

Open a terminal inside the root folder and run: `composer init`


Answer the questions (you can skip optional fields).

Then add autoloading support in `composer.json` like this:

"autoload": {
    "psr-4": {
        "GymApp\\": "src/"
    }
}


Save it and run: `composer dump-autoload`

This generates the autoloader.


Your project is now structured and ready to start coding.

When you're done with this step, type `next` and I'll guide you through creating your first class.
```

_**Prompt:**_ 

```markdown
next
```

_**Answer:**_ 

```markdown
Awesome! Let's move on.

Step 2: Create the Base `Member` Class

We'll create a base class `Member` that holds common data and behavior for all gym members.

2.1. Create the file: `src/Models/Member.php`

2.2. Add this code:

<?php

declare(strict_types=1);

namespace GymApp\Models;

class Member
{
    protected string $name;
    protected string $membershipType;

    public function __construct(string $name, string $membershipType = 'basic')
    {
        $this->name = $name;
        $this->membershipType = $membershipType;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getMembershipType(): string
    {
        return $this->membershipType;
    }

    public function getPerks(): array
    {
        return ['Access to gym facilities'];
    }
}


This class defines:

    - A member’s name and type (`basic` by default)
    - `getName()` and `getMembershipType()` methods
    - `getPerks()` returns basic perks (can be overridden later)

When you're ready to proceed to premium members, type `next`.

```
And more...

### **4. <u>Role Prompt:</u>** 

This type of prompting is used to tell the AI to act as a specific role or character. This is useful when we want to simulate a conversation with a specific person or when we want to understand how a particular role or character would approach a problem.

### **Advantages**

#### For the **User**:

* **Immersive experience**: Makes interactions more engaging by simulating a real person or character.
* **Contextual insight**: Helps understand perspectives, attitudes, or expertise unique to a role.
* **Creative exploration**: Useful for brainstorming, storytelling, or practicing conversations.
* **Problem framing**: Shows how different roles might approach the same problem differently.

#### For the **AI**:

* **Focused responses**: Narrowing the AI’s “persona” helps generate more consistent and relevant answers.
* **Customizability**: Easy to switch roles for various use cases without changing core logic.
* **Enhanced creativity**: Allows AI to use diverse tones, styles, and vocabularies fitting the role.


### **Disadvantages**

#### For the **User**:

* **Possible stereotypes**: AI might fall into clichés or oversimplified portrayals of roles.
* **Limited scope**: Responses may be biased or constrained by the role’s assumed knowledge or attitude.
* **Less direct answers**: Role-playing might lead to indirect or narrative answers rather than straightforward facts.

#### For the **AI**:

* **Complex prompt design**: Requires careful instructions to maintain role consistency.
* **Risk of confusion**: Mixing roles or unclear prompts may cause inconsistent responses.
* **Context drift**: AI might lose role focus over long interactions if not reminded or constrained.

### **Example**

_**Prompt:**_ 

```markdown
I want you to pretend you are an instructor who explains complicated topics in a simple and easy-to-understand way. You create fun exercises so the student can learn by doing. You're teaching how to build a GymMembershipApp. Move one step at a time and wait for the student to provide the correct answer before continuing.
```

_**Answer:**_ 

```markdown
Awesome! Welcome to your PHP OOP Bootcamp, where we’ll build a real GymMembershipApp step by step.

I’ll be your friendly instructor, and I’ll turn everything into fun learning challenges!
We'll go slow, one bite at a time. After each challenge, I’ll wait for *you* to answer before we move on.

Step 1: Create the Project Folder and Setup

Lesson goal: Set up the foundation for your PHP app with Composer and proper folder structure.

Concept:

Every well-structured PHP app needs a clear folder layout and autoloading for classes.
We'll use Composer to handle autoloading using PSR-4, which makes our classes load automatically.


Exercise 1:

Here’s what I want you to do:

1. Create a folder named `GymMembershipApp`.
2. Inside it, create the following structure:


GymMembershipApp/
├── src/          # Source code will go here
├── public/       # Entry point of our app
├── config/       # For settings later


3. Inside the root folder (`GymMembershipApp`), run this in terminal to set up Composer: `composer init`


4. When it finishes, open `composer.json` and add this part under `"autoload"`:

"autoload": {
    "psr-4": {
      "GymApp\\": "src/"
    }
}

5. Then run: `composer dump-autoload`


Challenge question:

What command did we run to tell Composer to generate the autoloader for our classes?

Write just the command you ran (e.g. `composer something`). When you get it right, we move on to Step 2!

```

_**Prompt:**_ 

```markdown
composer dump-autoload
```

_**Answer:**_ 

```markdown
Nicely done!

`composer dump-autoload` is the magic command that tells Composer:

“Hey! I just changed something in my autoload config—please rebuild your map of class locations!”

That’s how PHP will know where to find our classes automatically without using `require`.

Step 2: Create Your First Class — The Base `Member`

Concept:

In OOP, we often start by creating a base class that other classes can build upon.
For our gym, every member — no matter their plan — shares some basic information:

    - Their name
    - Their membership type
    - Some basic perks

We’ll model this with a class called `Member`.

Exercise 2:

Inside `src/Models/`, create a file named `Member.php`.
Then, complete the following code by filling in the two blanks (replace the ??).

<?php

declare(strict_types=1);

namespace GymApp\Models;

class Member
{
    protected string $name;
    protected string $membershipType;

    public function __construct(string $name, string $membershipType = 'basic')
    {
        $this->name = $name;
        $this->membershipType = $membershipType;
    }

    public function getName(): string
    {
        return $this->??;
    }

    public function getMembershipType(): string
    {
        return $this->??;
    }

    public function getPerks(): array
    {
        return ['Access to gym facilities'];
    }
}

Challenge question:

What should go in place of each `??`?

Tell me the two **property names** that complete the class correctly. (just the two names)
When you answer correctly, I’ll promote you to Step 3! 

```

And more...

## **References**

### **YouTube**

1. [Essential AI prompts for developers](https://youtu.be/H3M95i4iS5c?si=832rSxN53zJnnRR9)
2. [Master the Perfect ChatGPT Prompt Formula](https://youtu.be/jC4v5AS4RIM?si=s6mhBX9uPCgbaBT9)