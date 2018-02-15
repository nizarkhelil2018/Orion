<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ua', array (
  'security' => 
  array (
    'An authentication exception occurred.' => 'Помилка автентифікації.',
    'Authentication credentials could not be found.' => 'Автентифікаційні дані не знайдено.',
    'Authentication request could not be processed due to a system problem.' => 'Запит на автентифікацію не може бути опрацьовано у зв’язку з проблемою в системі.',
    'Invalid credentials.' => 'Невірні автентифікаційні дані.',
    'Cookie has already been used by someone else.' => 'Хтось інший вже використав цей сookie.',
    'Not privileged to request the resource.' => 'Відсутні права на запит цього ресурсу.',
    'Invalid CSRF token.' => 'Невірний токен CSRF.',
    'Digest nonce has expired.' => 'Закінчився термін дії одноразового ключа дайджесту.',
    'No authentication provider found to support the authentication token.' => 'Не знайдено провайдера автентифікації, що підтримує токен автентифікаціії.',
    'No session available, it either timed out or cookies are not enabled.' => 'Сесія недоступна, її час вийшов, або cookies вимкнено.',
    'No token could be found.' => 'Токен не знайдено.',
    'Username could not be found.' => 'Ім’я користувача не знайдено.',
    'Account has expired.' => 'Термін дії облікового запису вичерпано.',
    'Credentials have expired.' => 'Термін дії автентифікаційних даних вичерпано.',
    'Account is disabled.' => 'Обліковий запис відключено.',
    'Account is locked.' => 'Обліковий запис заблоковано.',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaine est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaine est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaine doit avoir exactement {{ limit }} caractère.|Cette chaine doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'fos_user.username.already_used' => 'Le nom d\'utilisateur est déjà utilisé.',
    'fos_user.username.blank' => 'Entrez un nom d\'utilisateur s\'il vous plait.',
    'fos_user.username.short' => 'Le nom d\'utilisateur est trop court.',
    'fos_user.username.long' => 'Le nom d\'utilisateur est trop long.',
    'fos_user.email.already_used' => 'L\'adresse e-mail est déjà utilisée.',
    'fos_user.email.blank' => 'Entrez une adresse e-mail s\'il vous plait.',
    'fos_user.email.short' => 'L\'adresse e-mail est trop courte.',
    'fos_user.email.long' => 'L\'adresse e-mail est trop longue.',
    'fos_user.email.invalid' => 'L\'adresse e-mail est invalide.',
    'fos_user.password.blank' => 'Entrez un mot de passe s\'il vous plait.',
    'fos_user.password.short' => 'Le mot de passe est trop court.',
    'fos_user.password.mismatch' => 'Les deux mots de passe ne sont pas identiques.',
    'fos_user.new_password.blank' => 'Entrez un nouveau mot de passe s\'il vous plait.',
    'fos_user.new_password.short' => 'Le nouveau mot de passe est trop court.',
    'fos_user.current_password.invalid' => 'Le mot de passe est invalide.',
    'fos_user.group.blank' => 'Entrez un nom s\'il vous plait.',
    'fos_user.group.short' => 'Le nom est trop court.',
    'fos_user.group.long' => 'Le nom est trop long.',
    'fos_group.name.already_used' => 'Le nom est déjà utilisé.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'Digest nonce has expired.' => 'Le digest nonce a expiré.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Mettre à jour le groupe',
    'group.show.name' => 'Nom du groupe',
    'group.new.submit' => 'Créer le groupe',
    'group.flash.updated' => 'Le groupe a été mis à jour.',
    'group.flash.created' => 'Le groupe a été créé.',
    'group.flash.deleted' => 'Le groupe a été supprimé.',
    'security.login.username' => 'Nom d\'utilisateur',
    'security.login.password' => 'Mot de passe',
    'security.login.remember_me' => 'Se souvenir de moi',
    'security.login.submit' => 'Connexion',
    'profile.show.username' => 'Nom d\'utilisateur',
    'profile.show.email' => 'Adresse e-mail',
    'profile.edit.submit' => 'Mettre à jour',
    'profile.flash.updated' => 'Le profil a été mis à jour.',
    'change_password.submit' => 'Modifier le mot de passe',
    'change_password.flash.success' => 'Le mot de passe a été modifié.',
    'registration.check_email' => 'Un e-mail a été envoyé à l\'adresse %email%. Il contient un lien d\'activation sur lequel il vous faudra cliquer afin d\'activer votre compte.',
    'registration.confirmed' => 'Félicitations %username%, votre compte est maintenant activé.',
    'registration.back' => 'Retour à la page d\'origine.',
    'registration.submit' => 'Créer un compte',
    'registration.flash.user_created' => 'L\'utilisateur a été créé avec succès.',
    'registration.email.subject' => 'Bienvenue %username% !',
    'registration.email.message' => 'Bonjour %username% !

Pour valider votre compte utilisateur, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe
',
    'resetting.check_email' => 'Un e-mail a été envoyé. Il contient un lien sur lequel il vous faudra cliquer pour réinitialiser votre mot de passe.
Remarque : Vous ne pouvez demander un nouveau mot de passe que toutes les %tokenLifetime% heures.

Si vous ne recevez pas un email, vérifiez votre dossier spam ou essayez à nouveau.
',
    'resetting.request.username' => 'Nom d\'utilisateur ou adresse e-mail',
    'resetting.request.submit' => 'Réinitialiser le mot de passe',
    'resetting.reset.submit' => 'Modifier le mot de passe',
    'resetting.flash.success' => 'Le mot de passe a été réinitialisé avec succès.',
    'resetting.email.subject' => 'Réinitialisation de votre mot de passe',
    'resetting.email.message' => 'Bonjour %username% !

Pour réinitialiser votre mot de passe, merci de vous rendre sur %confirmationUrl%

Cordialement,
L\'équipe
',
    'layout.logout' => 'Déconnexion',
    'layout.login' => 'Connexion',
    'layout.register' => 'Inscription',
    'layout.logged_in_as' => 'Connecté en tant que %username%',
    'form.group_name' => 'Nom du groupe',
    'form.username' => 'Nom d\'utilisateur',
    'form.email' => 'Adresse e-mail',
    'form.current_password' => 'Mot de passe actuel',
    'form.password' => 'Mot de passe',
    'form.password_confirmation' => 'Répéter le mot de passe',
    'form.new_password' => 'Nouveau mot de passe',
    'form.new_password_confirmation' => 'Répéter le nouveau mot de passe',
    'Added.reset' => 'Mot de passe oublié ?',
  ),
  'messages' => 
  array (
    'discutea.forum.category.removeall.label' => 'Supprimer tous les forums de cette catégorie ?',
    'discutea.forum.category.created' => 'La catégorie a été créée.',
    'discutea.forum.category.edit' => 'La catégorie a été mise à jour.',
    'discutea.forum.category.movedforums' => 'Les forums ont tous été deplacés.',
    'discutea.forum.category.delete' => 'La catégorie a été supprimée.',
    'discutea.forum.category.form.title' => 'Formulaire de gestion d\'une catégorie.',
    'discutea.forum.category.form.name' => 'Nom de la catégorie.',
    'discutea.forum.category.addforum' => 'Ajouter un forum',
    'discutea.forum.category.position' => 'Position dans les résultats.',
    'discutea.forum.category.permitions' => 'Droits de lecture.',
    'discutea.forum.category.form.deletetitle' => 'Suppression d\'une catégorie.',
    'discutea.forum.category.form.movedto' => 'Déplacer les forums dans :',
    'discutea.forum.category.form.purge' => 'Cocher pour supprimer tous les forums de cette catégorie.',
    'discutea.forum.category.manage' => 'Administrer les catégories et les forums.',
    'discutea.forum.category.createnew' => '+ Créer une catégorie +',
    'discutea.forum.category.countforum' => 'Nombre de forums dans la categorie :',
    'discutea.forum.forum.incat' => 'Liste des forums de',
    'discutea.forum.forum.delete' => 'Le forum a été supprimé.',
    'discutea.forum.forum.removeall.label' => 'Supprimer tous les sujets du forum ?',
    'discutea.forum.forum.created' => 'Le forum a été ajouté.',
    'discutea.forum.forum.edit' => 'Le forum a été mis à jour.',
    'discutea.forum.forum.movedtopics' => 'Les sujets ont tous été deplacés.',
    'discutea.forum.forum.form.title' => 'Formulaire de gestion d\'un forum.',
    'discutea.forum.forum.form.name' => 'Nom du forum.',
    'discutea.forum.forum.form.description' => 'Déscription du forum.',
    'discutea.forum.forum.form.image' => 'Image attachée au forum.',
    'discutea.forum.forum.form.category' => 'Sélectionner la catégorie :',
    'discutea.forum.forum.form.deletetitle' => 'Formulaire de supression d\'un forum.',
    'discutea.forum.forum.form.movedto' => 'Déplacer les sujets dans :',
    'discutea.forum.forum.form.purge' => 'Cocher pour supprimer entièrement les sujets du forum.',
    'discutea.forum.deleted.user' => 'Utilisateur supprimé',
    'discutea.forum.topic.create' => 'Le sujet a été créé avec succès.',
    'discutea.forum.topic.delete' => 'Le sujet a bien été supprimé.',
    'discutea.forum.topic.edit' => 'Le sujet a bien été édité.',
    'discutea.forum.topic.recent' => 'Les derniers sujets.',
    'discutea.forum.topic.new' => 'Créer un sujet',
    'discutea.forum.topic.title' => 'Titre du sujet :',
    'discutea.forum.warning.preview' => 'Attention ce message est en mode prévisualisation validez-le avant de quitter',
    'discutea.forum.post.create' => 'Le message a été créé avec succès.',
    'discutea.forum.post.edit' => 'Le message a bien été édité.',
    'discutea.forum.post.delete' => 'Le message a bien été supprimé.',
    'discutea.forum.post.deleteall' => 'Tous les messages ont été supprimés.',
    'discutea.forum.post.recent' => 'Les derniers messages.',
    'discutea.forum.post.want' => 'Voulez-vous vraiment supprimer le message ?',
    'discutea.forum.post.aged' => 'Attention, ce sujet est ancien. Le déterrer n\'est pas forcément approprié. Il est peut être plus adapté de créer un nouveau sujet.',
    'discutea.forum.post.confirmfirst' => 'Attention ! Ce message est le premier du sujet. En le supprimant vous supprimerez le sujet dans son intégralité !',
    'discutea.forum.post.editpost' => 'Edition du message',
    'discutea.forum.label.mark.solved' => 'Le sujet a été marqué comme résolu.',
    'discutea.forum.label.unmark.solved' => 'Le sujet n\'est plus marqué comme résolu.',
    'discutea.forum.label.mark.pinned' => 'Le sujet a été épinglé.',
    'discutea.forum.label.unmark.pinned' => 'Le sujet n\'est plus épinglé.',
    'discutea.forum.label.mark.closed' => 'Le sujet a été fermé.',
    'discutea.forum.label.unmark.closed' => 'Le sujet n\'est plus fermé.',
    'discutea.forum.label.solved' => 'Résolu',
    'discutea.forum.label.closed' => 'Fermer',
    'discutea.forum.label.pinned' => 'Epingler',
    'discutea.forum.label.issolved' => 'Sujet résolu',
    'discutea.forum.label.isclosed' => 'Sujet fermé',
    'discutea.forum.label.ispinned' => 'Sujet épinglé',
    'discutea.forum.edit' => 'Editer',
    'discutea.forum.remove' => 'Supprimer',
    'discutea.forum.title' => 'Titre',
    'discutea.forum.description' => 'Déscription',
    'discutea.forum.topics' => 'Sujets',
    'discutea.forum.position' => 'Position',
    'discutea.forum.action' => 'Action',
    'discutea.forum.categories' => 'Catégories',
    'discutea.forum.forums' => 'Forums',
    'discutea.forum.by' => 'par',
    'discutea.forum.on' => 'le',
    'discutea.forum.at' => 'à',
    'discutea.forum.location' => 'Chemin :',
    'discutea.forum.see' => 'Voir',
    'discutea.forum.forumlist' => 'Liste des forums',
    'discutea.forum.lastpostby' => 'Dernier message par',
    'discutea.forum.null' => 'Aucune réponse. Créer du contenu.',
    'discutea.forum.posts' => 'messages',
    'discutea.forum.post' => 'message',
    'discutea.forum.confirm' => 'Confirmation nécessaire',
    'discutea.forum.cancel' => 'Annuler',
    'discutea.forum.valid' => 'Valider',
    'discutea.forum.quote' => 'Citer',
    'discutea.forum.reply' => 'Répondre',
    'discutea.forum.btn.submit' => 'Soumettre',
    'Preview' => 'Prévisualiser',
    'Previous' => 'Précédent',
    'Next' => 'Suivant',
    'discutea.forum.choice' => 'Sélectionner un forum',
    'Symfony2 is great' => 'J\'aime Symfony2',
    'Hello' => 'Bonjour',
    'Events Management' => 'Gestion des Evénements',
    'All Events' => 'Tous les Evénements',
    'Events Search' => 'Rechercher Evénements',
    'Create an Event' => 'Créer un Evénement',
    'Themes Management' => 'Gestion des Thèmes',
    'All Themes' => 'Tous les Thèmes',
    'Themes Search' => 'Rechercher Thèmes',
    'Create a Theme' => 'Créer un Thème',
    'Types Management' => 'Gestion des Types',
    'All Types' => 'Tous les Types',
    'Types Search' => 'Rechercher Types',
    'Create a Type' => 'Créer un Type',
    'Tickets Management' => 'Gestion des Billets',
    'All Tickets' => 'Tous les Billets',
    'Tickets Search' => 'Rechercher Billets',
    'Create a Ticket' => 'Créer un Billet',
    'Add' => 'Ajout',
    'List' => 'Liste',
    'State Edit' => 'Modification Etat',
    'Display' => 'Afficher',
    'Edit' => 'Modifier',
    'Delete' => 'Supprimer',
    'Create' => 'Créer',
    'Update' => 'Mettre à Jour',
    'Publish' => 'Publier',
    'Hide' => 'Dé-publier',
    'Cancel' => 'Annuler',
    'Search' => 'Rechercher',
    'Public' => 'Publique',
    'Cancelled' => 'Annulé',
    'Registred' => 'Enregistré',
    'Active' => 'Actif',
    'Passive' => 'Passif',
    'Title' => 'Titre',
    'Description' => 'Description',
    'Theme' => 'Thème',
    'Type' => 'Type',
    'Starts the' => 'Commence le',
    'Ends the' => 'Se termine le',
    'at' => 'à',
    'Time zone' => 'Fuseau Horaire',
    'Address' => 'Adresse',
    'State' => 'Etat',
    'Country' => 'Pays',
    'City' => 'Ville',
    'Zip Code' => 'Code Postal',
    'Organizer' => 'Organisateur',
    'Starting Schedule' => 'Horaire de Début',
    'Ending Schedule' => 'Horaire de Fin',
    'Creation date' => 'Date de Création',
    'Picture' => 'Image',
    'No Events Found' => 'Aucun Evénement Trouvé',
    'Copyright © 2017' => 'Droit d\'auteur © 2017',
    'All rights are reserved.' => 'Tous les droits sont réservés.',
    '"Search..."' => '"Rechercher..."',
    'Wording' => 'Libellé',
    'Modification date' => 'Date de Modification',
    'Action' => 'Action',
    'Activate' => 'Activer',
    'Deactivate' => 'Désactiver',
    'No Themes Found' => 'Aucun Thème Trouvé',
    'No Types Found' => 'Aucun Type Trouvé',
    'No Tickets Found' => 'Aucun Billet Trouvé',
    'Events List' => 'Liste des Evénements',
    'Themes List' => 'Liste des Thèmes',
    'Types List' => 'Liste des Types',
    'Tickets List' => 'Liste des Billets',
    'Reservations List' => 'Liste des Réservations',
    'Reservations Management' => 'Gestion des Réservations',
    'Next Event' => 'Evénement Suivant',
    'Previous Event' => 'Evénement Précédant',
    'Next Theme' => 'Thème Suivant',
    'Previous Theme' => 'Thème Précédant',
    'Next Type' => 'Type Suivant',
    'Previous Type' => 'Type Précédant',
    'Next Ticket' => 'Billet Suivant',
    'Previous Ticket' => 'Billet Précédant',
    'New' => 'Nouveau',
    'Event' => 'Evénement',
    'Ticket' => 'Billet',
    'Price' => 'Prix',
    'Number' => 'Nombre',
    'Waiting List' => 'Liste d\'attente',
    'Reserve' => 'Réserver',
    'Passed Event' => 'Evénement passé',
    'In Progress Event' => 'Evénement en cours',
    'Coming Event' => 'Evénement à venir',
    'My Events' => 'Mes Evénements',
    'All My Events' => 'Tous Mes Evénements',
    'My Public Events' => 'Mes Evénements Publiques',
    'My Cancelled Events' => 'Mes Evénements Annulés',
    'My Registred Events' => 'Mes Evénements Enregistrés',
    'My Tickets' => 'Mes Billets',
    'All My Tickets' => 'Tous mes Billets',
    'Home Page' => 'Page d\'acceuil',
    'Place' => 'Lieu',
    'More Details' => 'Plus de Détails',
    'Sign out' => 'Se déconnecter',
    'Profile' => 'Profil',
    'Online' => 'En ligne',
    'Orion is a platform for managing business opportunities.' => 'Orion est une plateforme de gestion des opportunités d’affaires.',
    'Being administrator, Orion Event gives you the opportunity to manage all entities. You are the only responsible for managing themes and types of events. You can also manage events, tickets and bookings made by other users.
                    For the Orion Forum module, you have the opportunity to manage forums and their categories as well as topics and answers to them.' => 'Etant administrateur Orion Event vous offre la possibilité de tous gérer. Vous êtes le seul responsable de la gestion des thèmes et des types d’événements. Vous avez aussi la possibilité de gérer les événements, les billets et les réservations effectuées par les autres utilisateurs.
                    Pour le module Orion Forum vous avez l’opportunité de gérer les forums et leurs catégories ainsi que les sujets et réponses à ses derniers.',
    'Being an Orion Event user, you can create events and you are the only responsible for managing your created events, your tickets and the bookings made for your events
For the Orion Forum module, you have the opportunity to create discussion subjects and to answer to subjects posted by other users.
' => 'Etant utilisateur Orion Event vous offre la possibilité de créer des événements. Vous êtes le seul responsable de vos événement crées ainsi que vos billets et les réservations à vos événements.
Pour le module Orion Forum vous avez l’opportunité de créer des sujets de discussion et de répondre à des sujets postés par d’autres utilisateurs.
',
    'Being an Orion Event moderator, you can create events and you are the only responsible for managing your created events, your tickets and the bookings made for your events
For the Orion Forum module, you have the opportunity to moderate discussion subjects and answers posted by other users.
' => 'Etant modérateur Orion Event vous offre la possibilité de créer des événements. Vous êtes le seul responsable de vos événement crées ainsi que vos billets et les réservations à vos événements.
Pour le module Orion Forum vous avez l’opportunité de modérer les sujets et réponses postés par les autres utilisateurs.
',
    'Choose a country' => 'Choisissez un pays',
    'Choose a type' => 'Choisissez un type',
    'Choose a theme' => 'Choisissez un thème',
    'Free' => 'Gratuit',
    'Paying' => 'Payant',
    'Available Tickets' => 'Billets disponibles',
    'Are you sure ?' => 'Etes-vous sur de vouloir réserver ?',
    'Reserved By' => 'Réservé par',
    'Reservation date' => 'Date de réservation',
    'My Reservations' => 'Mes Réservations',
    'Tickets Details' => 'Détails des billets',
    'orion.forum.category.removeall.label' => 'Supprimer tous les forums de cette catégorie ?',
    'orion.forum.category.created' => 'La catégorie a été créée.',
    'orion.forum.category.edit' => 'La catégorie a été mise à jour.',
    'orion.forum.category.movedforums' => 'Les forums ont tous été deplacés.',
    'orion.forum.category.delete' => 'La catégorie a été supprimée.',
    'orion.forum.category.form.title' => 'Formulaire de gestion d\'une catégorie.',
    'orion.forum.category.form.name' => 'Nom de la catégorie.',
    'orion.forum.category.addforum' => 'Ajouter un forum',
    'orion.forum.category.position' => 'Position dans les résultats.',
    'orion.forum.category.permitions' => 'Droits de lecture.',
    'orion.forum.category.form.deletetitle' => 'Suppression d\'une catégorie.',
    'orion.forum.category.form.movedto' => 'Déplacer les forums dans :',
    'orion.forum.category.form.purge' => 'Cocher pour supprimer tous les forums de cette catégorie.',
    'orion.forum.category.manage' => 'Administrer les catégories et les forums.',
    'orion.forum.category.createnew' => '+ Créer une catégorie +',
    'orion.forum.category.countforum' => 'Nombre de forums dans la categorie :',
    'orion.forum.forum.incat' => 'Liste des forums de',
    'orion.forum.forum.delete' => 'Le forum a été supprimé.',
    'orion.forum.forum.removeall.label' => 'Supprimer tous les sujets du forum ?',
    'orion.forum.forum.created' => 'Le forum a été ajouté.',
    'orion.forum.forum.edit' => 'Le forum a été mis à jour.',
    'orion.forum.forum.movedtopics' => 'Les sujets ont tous été deplacés.',
    'orion.forum.forum.form.title' => 'Formulaire de gestion d\'un forum.',
    'orion.forum.forum.form.name' => 'Nom du forum.',
    'orion.forum.forum.form.description' => 'Déscription du forum.',
    'orion.forum.forum.form.image' => 'Image attachée au forum.',
    'orion.forum.forum.form.category' => 'Sélectionner la catégorie :',
    'orion.forum.forum.form.deletetitle' => 'Formulaire de supression d\'un forum.',
    'orion.forum.forum.form.movedto' => 'Déplacer les sujets dans :',
    'orion.forum.forum.form.purge' => 'Cocher pour supprimer entièrement les sujets du forum.',
    'orion.forum.deleted.user' => 'Utilisateur supprimé',
    'orion.forum.topic.create' => 'Le sujet a été créé avec succès.',
    'orion.forum.topic.delete' => 'Le sujet a bien été supprimé.',
    'orion.forum.topic.edit' => 'Le sujet a bien été édité.',
    'orion.forum.topic.recent' => 'Les derniers sujets.',
    'orion.forum.topic.new' => 'Créer un sujet',
    'orion.forum.topic.title' => 'Titre du sujet :',
    'orion.forum.warning.preview' => 'Attention ce message est en mode prévisualisation validez-le avant de quitter',
    'orion.forum.post.create' => 'Le message a été créé avec succès.',
    'orion.forum.post.edit' => 'Le message a bien été édité.',
    'orion.forum.post.delete' => 'Le message a bien été supprimé.',
    'orion.forum.post.deleteall' => 'Tous les messages ont été supprimés.',
    'orion.forum.post.recent' => 'Les derniers messages.',
    'orion.forum.post.want' => 'Voulez-vous vraiment supprimer le message ?',
    'orion.forum.post.aged' => 'Attention, ce sujet est ancien. Le déterrer n\'est pas forcément approprié. Il est peut être plus adapté de créer un nouveau sujet.',
    'orion.forum.post.confirmfirst' => 'Attention ! Ce message est le premier du sujet. En le supprimant vous supprimerez le sujet dans son intégralité !',
    'orion.forum.post.editpost' => 'Edition du message',
    'orion.forum.label.mark.solved' => 'Le sujet a été marqué comme résolu.',
    'orion.forum.label.unmark.solved' => 'Le sujet n\'est plus marqué comme résolu.',
    'orion.forum.label.mark.pinned' => 'Le sujet a été épinglé.',
    'orion.forum.label.unmark.pinned' => 'Le sujet n\'est plus épinglé.',
    'orion.forum.label.mark.closed' => 'Le sujet a été fermé.',
    'orion.forum.label.unmark.closed' => 'Le sujet n\'est plus fermé.',
    'orion.forum.label.solved' => 'Résolu',
    'orion.forum.label.closed' => 'Fermer',
    'orion.forum.label.pinned' => 'Epingler',
    'orion.forum.label.issolved' => 'Sujet résolu',
    'orion.forum.label.isclosed' => 'Sujet fermé',
    'orion.forum.label.ispinned' => 'Sujet épinglé',
    'orion.forum.edit' => 'Editer',
    'orion.forum.remove' => 'Supprimer',
    'orion.forum.title' => 'Titre',
    'orion.forum.description' => 'Déscription',
    'orion.forum.topics' => 'Sujets',
    'orion.forum.position' => 'Position',
    'orion.forum.action' => 'Action',
    'orion.forum.categories' => 'Catégories',
    'orion.forum.forums' => 'Forums',
    'orion.forum.by' => 'par',
    'orion.forum.on' => 'le',
    'orion.forum.at' => 'à',
    'orion.forum.location' => 'Chemin :',
    'orion.forum.see' => 'Voir',
    'orion.forum.forumlist' => 'Liste des forums',
    'orion.forum.lastpostby' => 'Dernier message par',
    'orion.forum.null' => 'Aucune réponse. Créer du contenu.',
    'orion.forum.posts' => 'messages',
    'orion.forum.post' => 'message',
    'orion.forum.confirm' => 'Confirmation nécessaire',
    'orion.forum.cancel' => 'Annuler',
    'orion.forum.valid' => 'Valider',
    'orion.forum.quote' => 'Citer',
    'orion.forum.reply' => 'Répondre',
    'orion.forum.btn.submit' => 'Soumettre',
    'orion.forum.choice' => 'Sélectionner un forum',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
