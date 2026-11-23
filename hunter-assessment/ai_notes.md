Setup:

//1. Alert from Configure and start DDEV:

Alert received: --create-docroot. It’s deprecated. I was still allowed to run ddev start; I was just alerted that the command-line flag was deprecated. Based on a quick google search, the newer Drupal 11 version, the docroot is created for you.

//2. Error received after running ddev drush:

    Prompt in Copilot: I'm encountering this error after running ddev drush:
    PHP Fatal error:  Uncaught Error: Call to undefined method Drush\Application::addCommand() in /var/www/html/vendor/consolidation/robo/src/Robo.php:558
    Stack trace:
    #0 /var/www/html/vendor/consolidation/robo/src/Robo.php(529): Robo\Robo::registerSingle()
    #1 /var/www/html/vendor/drush/drush/src/Application.php(342): Robo\Robo::register()
    #2 /var/www/html/vendor/drush/drush/src/Runtime/Runtime.php(105): Drush\Application->configureAndRegisterCommands()
    #3 /var/www/html/vendor/drush/drush/src/Runtime/Runtime.php(40): Drush\Runtime\Runtime->doRun()
    #4 /var/www/html/vendor/drush/drush/drush.php(140): Drush\Runtime\Runtime->run()
    #5 /var/www/html/vendor/bin/drush.php(119): include('...')
    #6 {main}
    thrown in /var/www/html/vendor/consolidation/robo/src/Robo.php on line 558

    Fatal error: Uncaught Error: Call to undefined method Drush\Application::addCommand() in /var/www/html/vendor/consolidation/robo/src/Robo.php:558
    Stack trace:
    #0 /var/www/html/vendor/consolidation/robo/src/Robo.php(529): Robo\Robo::registerSingle()
    #1 /var/www/html/vendor/drush/drush/src/Application.php(342): Robo\Robo::register()
    #2 /var/www/html/vendor/drush/drush/src/Runtime/Runtime.php(105): Drush\Application->configureAndRegisterCommands()
    #3 /var/www/html/vendor/drush/drush/src/Runtime/Runtime.php(40): Drush\Runtime\Runtime->doRun()
    #4 /var/www/html/vendor/drush/drush/drush.php(140): Drush\Runtime\Runtime->run()
    #5 /var/www/html/vendor/bin/drush.php(119): include('...')
    #6 {main}
    thrown in /var/www/html/vendor/consolidation/robo/src/Robo.php on line 558
    [warning] Drush command terminated abnormally.
    Failed to run drush : exit status 1

What I learned from this error:

    It's Response:
    There’s a Drush/Robo dependency incompatibility:
    Drush: 13.8.1
    Robo:  5.2.3
    Symfony Console: 6.4.50
    Robo now calls addCommand(), but your Drush application still exposes Symfony Console’s add() method

Fix from Copilot:

    Try updating the related dependencies together from the project root: ddev composer update drush/drush consolidation/robo --with-dependencies and ddev drush status

Because the error remained, I was instructed to run the next line:

    The next fix was adding ddev composer require consolidation/robo:"5.1.0" --with-dependencies and then running ddev drush status again.

This fixed the error but before continuing, I prompted Copilot to check that the packages drush, robo, and symfony console were compatible, which were confirmed that they were.

Step 1:
//3. Locating the system.site name in the Umami demo site:

    Prompt in ChatGPT:
    "Within the umami demo site, point me in the direction of creating a user with the editor role and the system.site name":

    Repsonse for user:
    1. In the administration toolbar, go to Manage → People → Add user.

    Repsonse for site:
    1. Manage → Configuration → System → Basic site settings

Verified myself- if I want the site information, remove the name at the end of site.name. ChatGPT was used to understand the layout of the website while Copilot was used due to it having direct access to my files.

Step 2:
//4. Prompt with Copilot:

    "As my thinking partner, assist me with adding drupal/admin_toolbar and drupal/pathauto with Composer by stepping through it conceptually".

    It's Response:

    Sure—conceptually, this has two separate stages: Composer downloads the module code, then Drupal enables the modules: ddev composer require drupal/admin_toolbar drupal/pathauto

Step 3:
Verified myself:
//5. From a previous project (Water Savings Calculator) I built for my round 2 interview I used that knowledge from that project to build the custom module. mkdir -p web/modules/custom/hunter_assessment on my own, and it's first .yml file. My other project consisted of two additional files that I knew weren't appropriate for this project. With that being said, I used the AI assistance:

//6. Prompt from Copilot:

    "I've created the custom hunter_assessment module. What additional file is needed to house the hook code structure?"

    Once the files were in place, I asked Copilot to:

    "Check the files created in the custom hunter assessment folder that they were implemented correctly".

They were implemented correctly.

//7. Preferred prompt from Copilot which was also run in ChatGPT and Claude:

    "I'm working in Drupal 10 with the Umami demo profile, running locally in DDEV. I have a custom module called hunter_assessment. Write an update hook to append “ - Hello Hunter” to every Umami node in a category, using the Recipe category “Dessert” as the example. It will run in the hunter_assessment.install file. Confirm that it worked and explain each section so that I can walk the interviewer through it."

My Explanation for why I chose the AI tool:
This prompt was run in Copilot, Claude, and ChatGPT. I wanted to compare their repsonses and see how the outputs differed. ChatGPT provided a more simplified explanation because it wasn't connected to my project context so I believed the response was incomplete. Claude provided a very in depth explanation, which was appreciated but appeared excessive. In contrast I selected Copilot's repsonse becuase it had direct access to my project files, allowing it asess what was needed more effectively. It analyzed what was needed as opposed to providing the code immediately, which led me to reject Chat and Claude.

//8. Prompt from Copilot related to the code error found in the hunter_assessment file:

    "Why am I receiving an error on lines 34 and 35 in the hunter_assessment.install file? On line 34, The error states: Undefined method 'getTranslationLanguages'. Call to unknown method: Drupal\Core\Entity\EntityInterface::getTranslationLanguages()
    On line 35, Undefined method 'getTranslationLanguage'. Call to unknown method: Drupal\Core\Entity\EntityInterface::getTranslationLanguage()"

    It's Response:
    They’re two different issues in hunter_assessment.install:
    Line 34 — getTranslationLanguages() is a valid Drupal translation method. The editor warns because loadMultiple() is inferred to return generic EntityInterface objects, which doesn’t declare that method. At runtime, the loaded recipe nodes support it. Narrow the type first with a NodeInterface check.
    Line 35 — getTranslationLanguage() is a real typo: Drupal has no method by that name. Use getTranslation($langcode). If execution reaches this call, it would cause a runtime fatal error.

//9. Prompt from Copilot

"I want to make sure I’m approaching this the right way.

Based on the requirements, I need to create a `/articles` page using Drupal Views that displays published Umami Article nodes in a table with the title, tags, and created date, limits the results to 10 per page, and includes an exposed filter for Tags."
