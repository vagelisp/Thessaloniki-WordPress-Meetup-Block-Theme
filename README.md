# Thessaloniki WordPress Meetup Block Theme

**[ English version [below](https://github.com/vagelisp/Thessaloniki-WordPress-Meetup-Block-Theme#english-version) ]**

Τι είναι ένα block theme και πώς φτιάχνεται; Τι είναι το Full Site Editing (FSE) και τα block patterns; Πώς μπορώ να φτιάξω τα δικά μου custom blocks; Στα πλαίσια του Thessaloniki WordPress Meetup, διοργανώνονται μια σειρά από πρακτικά workshops, όπου θα απαντήσουμε αυτά τα ερωτήματα, θα γράψουμε κώδικα, θα συνεργαστούμε ως ομάδα χρησιμοποιώντας το Git, το Slack και άλλα εργαλεία, με απώτερο σκοπό να δημιουργηθεί ένα ολοκληρωμένο block theme!

Το block theme θα ζει και θα αναπτύσσεται σε αυτό το repository, το οποίο θα είναι ανοικτό για να συνεισφέρει όποιος το επιθυμεί.

## Εργαλεία
Για να συνεισφέρετε στην ανάπτυξη του theme αλλά και για να δημιουργήσετε τα δικά σας block themes, custom blocks, patterns κ.λπ. θα χρειαστείτε κάποια εργαλεία.

### Γενικά
#### Λογαριασμός WordPress
Για να μπορέσετε να δημοσιεύσετε themes και plugins στους καταλόγους του WordPress, θα χρειαστεί να έχετε έναν λογαριασμό στο wordpress.org. Επίσης με έναν λογαριασμό wordpress.org, θα έχετε την δυνατότητα να συνεισφέρετε στο WordPress, να λαμβάνετε βοήθεια στα φόρουμ υποστήριξης, να αξιολογήσετε και να σχολιάζετε θέματα εμφάνισης και πρόσθετα.

Για να δημιουργήσετε έναν λογαριασμό στο wordpress.org πατήστε [εδώ](https://login.wordpress.org/register?locale=el).

#### Slack
Το slack είναι μία πλατφόρμα επικοινωνίας. Παρέχει άμεση συζήτηση μέσω γραπτών μηνυμάτων ή online κλήσεων και πάρα πολλές επιπλέον δυνατότητες όπως διαμοιρασμό εικόνων, κώδικα κλπ. Με την εγγραφή σας στο Slack της Ελληνικής Κοινότητας WordPress, έχετε πρόσβαση σε όλες τις συζητήσεις σχετικά με το WordPress, τα τοπικά WordPress Meetups και WordCamps και άλλα θέματα.

Για την εγγραφή σας στο Slack, ακολουθήστε αυτό τον [οδηγό](https://wpgreece.org/wordpress-greece-slack/).

### Ανάπτυξη & διαχείριση κώδικα
#### VS Code
Το Visual Studio Code, είναι ένα [IDE](https://en.wikipedia.org/wiki/Integrated_development_environment), το οποίο ενσωματώνει διάφορα χρήσιμα εργαλεία για να διευκολύνει την ανάπτυξη και αποσφαλμάτωση κώδικα (π.χ. syntax highlighting, code autocompletion, εργαλεία debug κ.λπ.) και παρέχεται δωρέαν.

Για να κάνετε λήψη του VS Code πατήστε [εδώ](https://code.visualstudio.com/Download)

#### Git
Το Git είναι ένα σύστημα ελέγχου εκδόσεων. Μας επιτρέπει να γνωρίζουμε ποιος, πότε και τι άλλαγές έκανε σε κάποιο αρχείο, ενώ διευκολύνει την συνεργασία πολλών ατομών που επεξεργάζονται τα ίδια αρχεία.

Για να κάνετε λήψη του Git πατήστε [εδώ](https://git-scm.com/).
Μπορείτε να δείτε έναν σύντομο αλλά περιεκτικό οδηγό με εξήγηση βασικών ενοιών του Git αλλά και παραδείγματα χρήσης [εδώ](https://rogerdudler.github.io/git-guide/).
[Εδώ](https://docs.github.com/en/get-started/quickstart/hello-world) θα βρείτε ένα βασικό παράδειγμα χρήσης του GitHub.

#### Node JS & npm
Το Node.js είναι μια πλατφόρμα ανάπτυξης λογισμικού χτισμένη σε περιβάλλον Javascript.

Το npm είναι ένας διαχειριστής πακέτων για τη γλώσσα προγραμματισμού JavaScript. Ένας διαχειριστής πακέτων είναι μια συλλογή εργαλείων που αυτοματοποιεί τη διαδικασία εγκατάστασης, αναβάθμισης και αφαίρεσης προγραμμάτων υπολογιστή.

Για να κάνετε λήψη του Node JS πατήστε [εδώ](https://nodejs.org/en/download/) (το npm συμπεριλαμβάνεται και θα εγκατασταθεί μαζί με το Node JS).

### Τοπικό περιβάλλον ανάπτυξης
Ως τοπικό περιβάλλον ανάπτυξης χαρακτηρίζεται ουσιαστικά η εγκατάσταση ενός web server στον υπολογιστή σας και η ύπαρξη ενός περιβάλλοντος όπου μπορείτε να κάνετε εύκολα την εγκατάσταση ενός WordPress και να προχωρήσετε με την ανάπτυξη, εκτέλεση και δοκιμή κώδικα.

Εάν και υπάρχουν πάρα πολλές εναλλακτικές για την δημιουργία ενός τοπικού περιβάλλοντος ανάπτυξης, προτείνουμε την χρήση του [Laragon](https://laragon.org/) ή του [Local](https://localwp.com/)

## Πλάνο workshops
Το πλάνο για τα workshops είναι το ακόλουθο:

**[27o Thessaloniki WordPress Meetup - 05 Νοεμβρίου 2022](https://www.meetup.com/wordpress_skg/events/289306513/)**
- Σύντομη παρουσίαση του project.
- Τι είναι ένα theme και ποιες οι διαφορές μεταξύ ενός κλασσικού και ενός block theme.
- Παρουσίαση και βοήθεια εγκατάστασης απαραίτητων εργαλείων.
- Δημιουργία βασικού σκελετού του block theme.
 


## Συχνές ερωτήσεις
### Ποιος θα είναι ο σκοπός αυτού του theme;
Πρόκειται για ένα theme γενικού σκοπού, χωρίς κάποια στόχευση σε συγκεκριμένο τύπο χρηστών ή συγκεκριμένες λειτουργίες. Θα δημιουργηθεί με στόχο την εξερεύνηση και την πρακτική εξάσκηση με τα εργαλεία, τις τεχνολογίες και τις πρακτικές που χρειάζονται για την δημιουργία ενός custom block-based theme. Επίσης, αφού ολοκληρωθεί αυτό το theme, θα δημοσιευθεί στο theme directory του WordPress.

### Πόσο θα κοστίζει αυτό το theme; Ποιος θα λάβει τα έσοδα;
Το τελικό theme θα δημοσιευθεί στο theme directory του WordPress και θα διανέμεται δωρεάν. Δεν θα υπάρξει κανένα οικονομικό όφελος ή έσοδα από την ανάπτυξη και δημοσίευση αυτού του theme.

### Δεν έχω γνώσεις σχετικές με τις τεχνολογίες και τα εργαλεία που απαιτούνται. Μπορώ να συμμετάσχω στα workshops;
Σίγουρα ΝΑΙ! Κάποιες βασικές γνώσεις HTML, PHP και JavaScript σίγουρα θα βοηθήσουν, ωστόσο δεν απαιτούνται προηγούμενες γνώσεις σε κανένα τομέα. Επιπλέον, ακόμη και εάν δεν αισθάνεστε άνετα να συμμετάσχετε εξαρχής, μόνο και μόνο η παρακολούθηση των workshops πιστεύουμε ότι θα προσφέρει αρκετές γνώσεις και υλικό για περαιτέρω αναζήτηση 😉

### Θα πρέπει να συμμετέχω σε όλα τα workshops;
Δεν είναι απαραίτητη η συμμετοχή σε όλα τα workshops, ωστόσο θα χαρούμε πάρα πολύ να σας έχουμε κοντά μας κάθε φορά.

### Εάν χάσω ένα workshop, μπορώ να συνεχίσω στα επόμενα;
Φυσικά. Μετά από κάθε workshop θα δημοσιεύεται σχετικό documentation με σημειώσεις, χρήσιμα links και ό,τι άλλο κρίνεται απαραίτητο ώστε να μπορεί ο οποιοσδήποτε να παρακολουθήσει την πορεία του project και να μπορεί να συμμετάσχει και να συνεισφέρει οποιαδήποτε στιγμή.

### Είναι υποχρεωτικό να φέρω laptop;
Σίγουρα όχι. Ωστόσο εάν φέρετε ένα laptop, θα είναι πολύ πιο εύκολο να ακολουθήσετε την πορεία του workshop και να λύσουμε τυχόν απορίες επί τόπου.

### Τι θα κερδίσω εάν συμμετάσχω;
Θα κερδίσετε την ευκαιρία να αποκτήσετε νέες γνώσεις και να κάνετε πρακτική εξάσκηση σε ένα πραγματικό project. Εάν ήδη έχετε τις απαραίτητες γνώσεις, τότε θα έχετε την ευκαιρία να τις μοιραστείτε με άλλα άτομα και να βοηθήσετε κι εσείς στην ανάπτυξη του theme.

### Κάθε πότε θα γίνονται αυτά τα workshops και τι διάρκεια θα έχουν;
Στοχεύουμε να γίνεται ένα workshop την τελευταία εβδομάδα κάθε μήνα. Κάθε workshop θα διαρκεί περίπου 3 ώρες.


# English version
_Disclaimer: The contents of this section is auto translated for now._

What is a block theme, and how is it made? What is Full Site Editing (FSE) and block patterns? How can I make my own custom blocks? As part of the Thessaloniki WordPress Meetup, a series of practical workshops are organized, where we will answer these questions, write code, collaborate as a team using Git, Slack, and other tools, with the ultimate goal of creating a complete block theme!

The block theme will live, and be developed in this repository, which will be open for anyone to contribute.

## Tools
To contribute to the development of the theme but also to create your own block themes, custom blocks, patterns, etc. you will need some tools.

### General Tools
#### WordPress account
To be able to publish themes and plugins to the WordPress directories, you will need to have a wordpress.org account. Also with a wordpress.org account, you will be able to contribute to WordPress, get help in the support forums, rate and comment on themes and plugins.

To create an account on wordpress.org click [here](https://login.wordpress.org/register?locale=en).

#### Slack
slack is a communication platform. It provides instant discussion via text messages or online calls, and many additional features such as sharing images, code, etc. By signing up to the Hellenic WordPress Community Slack, you will have access to all discussions about WordPress, local WordPress Meetups and WordCamps, and other topics.

To sign up for Slack follow this [guide](https://wpgreece.org/wordpress-greece-slack/).

### Code development & management tools
#### VS Code
Visual Studio Code, is an [IDE](https://en.wikipedia.org/wiki/Integrated_development_environment), which integrates various useful tools to facilitate code development, and debugging (e.g. syntax highlighting, code autocompletion , debug tools, etc.) and is provided for free.

To download VS Code click [here](https://code.visualstudio.com/Download)

#### Git
Git is a version control system. It allows us to know who, when, and what changes made to a file, while facilitating the collaboration of many people working on the same files.

To download Git click [here](https://git-scm.com/).
You can see a short but comprehensive guide with an explanation of basic Git concepts, and usage examples [here](https://rogerdudler.github.io/git-guide/).
[Here](https://docs.github.com/en/get-started/quickstart/hello-world) you will find a basic example of how to use GitHub.

#### Node JS & npm
Node.js is a software development platform built with Javascript.

npm is a package manager for the JavaScript programming language. A package manager is a collection of tools that automate the process of installing, upgrading, and removing computer programs.

To download Node JS click [here](https://nodejs.org/en/download/) (npm is included and will be installed with Node JS).

### Local development environment
A local development environment is basically the installation of a web server on your computer, which you can use to easily create WordPress instances, and proceed with the development, execution, and testing of code.

Although there are many alternatives for creating a local development environment, we recommend using [Laragon](https://laragon.org/) or [Local](https://localwp.com/)

## Workshops Schedule
The schedule for the workshops is as follows:

**[27th Thessaloniki WordPress Meetup - 05 November 2022](https://www.meetup.com/wordpress_skg/events/289306513/)**
- Brief presentation of the project.
- What is a theme, and what are the differences between a classic and a block theme.
- Presentation, and assistance with installation of necessary tools.
- Creation of the basic framework of the block theme.
 

## Frequently Asked Questions (FAQ)
### What will be the purpose of this theme?
It is going to be a general purpose theme, without targeting any specific type of users, or functions. It will be created with the goal to explore and actually use the tools, the technologies and thepractices that are necessary to create a custom block-based theme. Also, once this theme will be complete, it will be published in the WordPress theme directory.


### How much will this theme cost? Who will receive the proceeds?
The final theme will be published in the WordPress theme directory, and will be distributed for free. There will be no financial benefits, or revenue from the development and publication of this theme.

### I have no knowledge related to the technologies, and tools required. Can I still participate in the workshops?
Definitely yes! Some basic knowledge of HTML, PHP and JavaScript will definitely help, however no previous knowledge of any field is required. Furthermore even if you do not feel comfortable participating in the first place, we believe that just attending the workshops will provide enough knowledge and material for further exploration :)

### Do I have to attend all workshops? 
Your participation in all workshops is not mandatory, however we will be very glad if you would join us every time. 

### If I miss one workshop, can I still continue with the next ones? 
Absolutely. After each workshop, a debriefing documentation will be provided containing notes, useful links, and any material which would be necessary so that anyone could follow the progress of the project, and be able to participate and contribute at any given time. 

### Do I have to bring my own laptop to the meetup?
Definitely not. If you have your own laptop, however, it will be so much easier to follow along with the progress of the workshop, and we will be able to address possible questions on the spot. 

### What will I gain if I participate to the project? 
You will have the opportunity to acquire new knowledge, and practice on a real project. If you already have the necessary knowledge, then you will have the opportunity to share it with other people, and help in the development of the theme. 

### How often will those workshops be held, and what will be the duration? 
Our goal is for a workshop to take place at the last week of every month. Each workshop shall take approximately 3 hours. 
