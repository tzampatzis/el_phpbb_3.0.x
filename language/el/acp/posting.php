<?php
/**
*
* acp_posting [Greek - El]
*
* @package language
* @version $Id: posting.php 11098 2011-04-11 00:00:08Z git-gate $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com:
* (http://phpbbgr.com/team/)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'Το BBCode είναι μια ειδική εφαρμογή του HTML που προσφέρει μεγαλύτερο έλεγχο που και πώς αυτό εμφανίζονται. Από αυτήν την σελίδα μπορείτε να προσθέσετε, να αφαιρέσετε ή να επεξεργαστείτε τα BBCodes.',
	'ADD_BBCODE'				=> 'Προσθήκη νέου BBCode',
	'BBCODE_DANGER'				=> 'Το BBCode που προσπαθείτε να προσθέσετε φαίνετε οτι χρησιμοποιεί ένα σύμβολο {TEXT} μέσα σε όρισμα HTML. Αυτό είναι ένα πιθανό θέμα ασφάλειας XSS. Προσπαθήστε να χρησιμποιήσετε τα πιο περιοριστικά {SIMPLETEXT} ή {INTTEXT} στη θέση του. Προχωρήστε μόνο αν κατανοείτε το ρίσκο που περιλαμβάνει η ενέργειά σας και θεωρείτε την χρήση του {TEXT} απόλυτα αναπόφευκτη.',
	'BBCODE_DANGER_PROCEED'		=> 'Προχωρήστε, καταλαβαίνω τον κίνδυνο',

	'BBCODE_ADDED'				=> 'BBCode προστέθηκε επιτυχώς.',
	'BBCODE_EDITED'				=> 'BBCode επεξεργάστηκε επιτυχώς.',
	'BBCODE_NOT_EXIST'			=> 'Το BBCode που επιλέξατε δεν υπάρχει.',
	'BBCODE_HELPLINE'			=> 'Γραμμή βοήθειας',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Εισάγετε εδώ το κείμενο, το οποίο πρόκειται να εμφανιστεί στην γραμμή βοήθειας, εάν ο δείκτης του ποντικιού είναι πάνω στο BBCode.',
	'BBCODE_HELPLINE_TEXT'		=> 'Γραμμή βοήθειας κείμενο',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'Η γραμμή βοήθειας που εισαγάγατε είναι πάρα πολύ μεγάλη.',

	'BBCODE_INVALID_TAG_NAME'	=> 'Η BBCode ετικέτα όνομα που επιλέξατε ήδη υπάρχει.',
	'BBCODE_INVALID'			=> 'Ο BBCode σας κατασκευάζεται σε μια άκυρη μορφή.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Η καθορισμένη από τον χρήστη BBCode ετικέτα πρέπει να περιέχει και μια ανοιχτή και μια κλειστή ετικέτα.',
	'BBCODE_TAG'				=> 'Ετικέτα',
	'BBCODE_TAG_TOO_LONG'		=> 'Το όνομα ετικέτας που επιλέξατε είναι πολύ μεγάλο.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'Ο ορισμός ετικετών που έχετε εισαγάγει είναι πάρα πολύ μεγάλος, παρακαλώ ορίστε ποιο μικρές τις ετικέτες.',
	'BBCODE_USAGE'				=> 'BBCode χρήση',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Εδώ καθορίζετε πώς να χρησιμοποιήσετε το BBCode. Αντικαταστήστε τις μεταβλητές εισαγωγών από το αντίστοιχο σημείο (%sκοίτα κάτω%s).',

	'EXAMPLE'						=> 'Παράδειγμα:',
	'EXAMPLES'						=> 'Παραδείγματα:',

	'HTML_REPLACEMENT'				=> 'HTML αντικατάσταση',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color:{COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family:{SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Εδώ καθορίζετε την αντικατάσταση HTML προεπιλογής. Μην ξεχάστε να ξαναβάλετε τα σημεία που χρησιμοποιήσατε ποιο πάνω!',

	'TOKEN'					=> 'Σύμβολο',
	'TOKENS'				=> 'Σύμβολα',
	'TOKENS_EXPLAIN'		=> 'Τα κουπόνια είναι σύμβολα υποκατάστατων για τις εισαγωγές μελών. Η εισαγωγή θα επικυρωθεί μόνο εάν ταιριάξει με τον αντίστοιχο καθορισμό. Εάν είναι απαραίτητο μπορείτε να τους αριθμήσετε με την προσθήκη ενός αριθμού ως τελευταίο χαρακτήρα μεταξύ των συνδετήρων, π.χ. {TEXT1}, {TEXT2}.<br /><br />Επιπλέον μπορείτε να χρησιμοποιήσετε πρόσθετα κάθε γλωσσική μεταβλητή, που καθορίζεται στη λίστα γλωσσών, ως εξής: {L_<em>&lt;STRINGNAME&gt;</em>} όπου <em>&lt;STRINGNAME&gt;</em> είναι το όνομα της μεταφρασμένης σειράς που θέλετε να προσθέσετε. Για παράδειγμα, {L_WROTE} θα επιδειχθεί όπως "έγραψε" ή η μετάφρασή του σύμφωνα με το σύνολο τοπικής προσαρμογής του μέλους.<br /><br /><strong>Παρακαλώ σημειώστε ότι μόνο τα Σύμβολα που απαριθμούνται κατωτέρω είναι σε θέση να χρησιμοποιηθούν μέσα στα προσαρμοσμένα BBCodes.</strong>',
	'TOKEN_DEFINITION'		=> 'Ποιες τιμές είναι δυνατές;',
	'TOO_MANY_BBCODES'		=> 'Δεν μπορείτε να δημιουργήσετε περισσότερους BBCodes. Παρακαλώ διαγράψτε έναν ή περισσότερους BBCodes και προσπαθήστε πάλι',

	'tokens'	=>	array(
		'TEXT'			=> 'Οποιοδήποτε κείμενο, περιλαμβάνει ξένους χαρακτήρε, αριθμούς, κλπ… Δεν πρέπει να χρησιμοποιείτε αυτό το σύμβολο μέσα σε ετικέτες HTML. Ανταυτού δοκιμάστε την χρήση του IDENTIFIER, INTTEXT ή SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Χαρακτήρες του λατινικού αλφαβήτου (A-Z), αριθμοί, κενά, κόμματα, τελείες, αρνητικά πρόσημα, θετικά πρόσημα, παύλες και κάτω παύλες',
		'INTTEXT'		=> 'Χαρακτήρες γραμμάτων Unicode, αριθμοί, κενά, κόμματα, τελείες, αρνητικά πρόσημα, θετικά πρόσημα, παύλες, κάτω παύλες και κενά διαστήματα.',
		'IDENTIFIER'	=> 'Χαρακτήρες του λατινικού αλφαβήτου (A-Z), αριθμοί, παύλες και   χαρακτήρες υπογράμμισης',

		'NUMBER'		=> 'Κάθε σειρά αριθμών',
		'EMAIL'			=> 'Μια έγκυρη ηλεκτρονική διεύθυνση',
		'URL'			=> 'Ένα έγκυρο URL που χρησιμοποιεί οποιοδήποτε πρωτόκολλο (http, ftp, κ.τ.λ… δεν μπορεί να χρησιμοποιηθεί γιατί τα javascript το εκμεταλλεύονται). Εάν κανένα δεν υποδεικνύεται, το “http://” τοποθετείτε μπροστά.',
		'LOCAL_URL'		=> 'Ένα τοπικό URL. Το URL πρέπει να είναι σχετικό με τη σελίδα θέματος και δεν πρέπει να περιέχει ένα όνομα ή ένα πρωτόκολλο κεντρικών υπολογιστών, καθώς οι συνδέσεις είναι το πρόθεμα “%s”',
		'RELATIVE_URL'	=> 'Μια σχετική διεύθυνση συνδέσμου URL. Μπορείτε να χρησιμοποιήσετε ένα μέρος του συνδέσμου URL, αλλά να προσέχετε ένας πλήρες σύνδεσμος URL είναι έγκυρη σχετική διεύθυνση συνδέσμου URL. Όταν θέλετε να χρησιμοποιήσετε σχετικές διευθύνσεις συνδέσμων URL της ιστοσελίδα σας, χρησιμοποιήστε το LOCAL_URL token.',
		'COLOR'			=> 'Ένα χρώμα HTML, μπορεί να είναι είτε σε αριθμητική μορφή <samp>#FF1234</samp> είτε μια <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS λέξη-κλειδί χρώματος </a> όπως για παράδειγμα <samp>fuchsia</samp> ή <samp>InactiveBorder</samp> που υποδεικνύεται'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Από αυτήν την σελίδα μπορείτε να προσθέσετε, να αφαιρέσετε και να επεξεργαστείτε τα σύμβολα τα οποία τα μέλη μπορούν να χρησιμοποιήσουν στα θέματα ή τις δημοσιεύσεις. Αυτά τα σύμβολα εμφανίζονται γενικά δίπλα από τους τίτλους θεμάτων στη λίστα της Δ. Συζήτησης, ή στην περιγραφή της δημοσίευσης στις λίστες θεμάτων. Μπορείτε επίσης να εγκαταστήσετε και να δημιουργήσετε νέα πακέτα συμβόλων.',
	'ACP_SMILIES_EXPLAIN'	=> 'Το Smilies ή emoticons είναι χαρακτηριστικά μικρές, περιστασιακά ζωντανές εικόνες, οι οποίες χρησιμοποιούνται για να μεταβιβάσουν μια συγκίνηση ή ένα αίσθημα. Από αυτήν την σελίδα μπορείτε να προσθέσετε, να αφαιρέσετε και να επεξεργαστείτε τα emoticons που τα μέλη μπορούν να χρησιμοποιήσουν στις δημοσιεύσεις και τα προσωπικά μηνύματα. Μπορείτε επίσης να εγκαταστήσετε και να δημιουργήσετε νέα πακέτα smilies.',
	'ADD_SMILIES'			=> 'Προσθήκη πολλαπλών smilies',
	'ADD_SMILEY_CODE'		=> 'Προσθέστε το συμπληρωματικό κώδικα smiley',
	'ADD_ICONS'				=> 'Προσθήκη πολλαπλών συμβόλων',
	'AFTER_ICONS'			=> 'Μετά %s',
	'AFTER_SMILIES'			=> 'Μετά %s',

	'CODE'						=> 'Κώδικας',
	'CURRENT_ICONS'				=> 'Τρέχων σύμβολα',
	'CURRENT_ICONS_EXPLAIN'		=> 'Επιλέξτε τι θέλετε να κάνετε με τα τρέχων εγκατεστημένα σύμβολα.',
	'CURRENT_SMILIES'			=> 'Τρέχων smilies',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Επιλέξτε τι θέλετε να κάνετε με τα τρέχων εγκατεστημένα smilies.',

	'DISPLAY_ON_POSTING'	=> 'Εμφάνιση στην σελίδα δημοσίευσης',
	'DISPLAY_POSTING'			=> 'Στην σελίδα δημοσίευσης',
	'DISPLAY_POSTING_NO'		=> 'Όχι στην σελίδα δημοσίευσης',
	
	'EDIT_ICONS'				=> 'Επεξεργασία συμβόλου',
	'EDIT_SMILIES'				=> 'Επεξεργασία smilies',
	'EMOTION'					=> 'Περιγραφή',
	'EXPORT_ICONS'				=> 'Εξαγωγή και μεταφόρτωση πακέτου συμβόλων',
	'EXPORT_ICONS_EXPLAIN'		=> '%sΜε αυτόν τον σύνδεσμο μπορείτε να γράψετε τις ρυθμίσεις των εγκατεστημένων συμβόλων σε ένα αρχείο <samp>icons.pak</samp> που μόλις  μεταφορτωθεί μπορεί να χρησιμοποιηθεί για την δημιουργία ενός <samp>.zip</samp> ή <samp>.tgz</samp> αρχείου που περιέχει όλα τα σύμβολα συν το αρχείο ρυθμίσεων <samp>icons.pak</samp> %s.',
	'EXPORT_SMILIES'			=> 'Εξαγωγή και μεταφόρτωση πακέτου smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sΜε αυτόν τον σύνδεσμο μπορείτε να γράψετε τις ρυθμίσεις των εγκατεστημένων συμβόλων σε ένα αρχείο <samp>smilies.pak</samp> που μόλις μεταφορτωθεί μπορεί να χρησιμοποιηθεί για την δημιουργία ενός <samp>.zip</samp> ή <samp>.tgz</samp> αρχείου που περιέχει όλα τα σύμβολα συν το αρχείο ρυθμίσεων <samp>smilies.pak</samp>%s.',

	'FIRST'			=> 'Στην αρχή',

	'ICONS_ADD'				=> 'Προσθέστε νέο σύμβολο θέματος',
	'ICONS_NONE_ADDED'		=> 'Κανένα σύμβολο δεν έχει προστεθεί.',
	'ICONS_ONE_ADDED'			=> 'Το σύμβολο προστέθηκε με επιτυχία.',
	'ICONS_ADDED'			=> 'Τα σύμβολα προστέθηκαν με επιτυχία.',	'ICONS_CONFIG'			=> 'Σύμβολα ρυθμίσεις',
	'ICONS_DELETED'			=> 'Το σύμβολο διαγράφτηκε με επιτυχία.',
	'ICONS_EDIT'			=> 'Επεξεργασία σύμβολου',
	'ICONS_ONE_EDITED'			=> 'Το σύμβολο ενημερώθηκε με επιτυχία.',
	'ICONS_NONE_EDITED'		=> 'Κανένα σύμβολο δεν ενημερώθηκε.',
	'ICONS_EDITED'			=> 'Τα σύμβολα ενημερώθηκαν με επιτυχία .',
	'ICONS_HEIGHT'			=> 'Ύψος σύμβολου',
	'ICONS_IMAGE'			=> 'Εικόνα σύμβολου,',
	'ICONS_IMPORTED'		=> 'Το πακέτο συμβόλων εγκαταστάθηκε με επιτυχία.',
	'ICONS_IMPORT_SUCCESS'	=> 'Η εισαγωγή του πακέτο συμβόλων έγινε με επιτυχία.',
	'ICONS_LOCATION'		=> 'Τοποθεσία συμβόλων',
	'ICONS_NOT_DISPLAYED'	=> 'Τα ακόλουθα σύμβολα δεν θα εμφανίζονται στην σελίδα δημοσίευσης',
	'ICONS_ORDER'			=> 'Ταξινόμηση συμβόλων',
	'ICONS_URL'				=> 'Αρχείο συμβόλων εικόνες',
	'ICONS_WIDTH'			=> 'Πλάτος σύμβολου',
	'IMPORT_ICONS'			=> 'Εγκατεστημένα πακέτα συμβόλων',
	'IMPORT_SMILIES'		=> 'Εγκατεστημένα πακέτα smilies',

	'KEEP_ALL'			=> 'Κρατήστε όλα',

	'MASS_ADD_SMILIES'	=> 'Προσθήκη πολλαπλών smilies',

	'NO_ICONS_ADD'		=> 'Δεν υπάρχει κανένα διαθέσιμο σύμβολο την προσθήκη.',
	'NO_ICONS_EDIT'		=> 'Δεν υπάρχει κανένα διαθέσιμο σύμβολο για επεξεργασία.',
	'NO_ICONS_EXPORT'	=> 'Δεν έχετε κανένα σύμβολο με τα οποία θα δημιουργήσετε ένα πακέτο.',
	'NO_ICONS_PAK'		=> 'Κανένα πακέτο συμβόλων δεν βρέθηκε.',
	'NO_SMILIES_ADD'  => 'Δεν υπάρχει κανένα διαθέσιμο smiley για προσθήκη.',
	'NO_SMILIES_EDIT'  => 'Δεν υπάρχει κανένα διαθέσιμο smiley για επεξεργασία.',
	'NO_SMILIES_EXPORT'  => 'Δεν έχετε κανένα smiley για να δημιουργήσετε ένα πακέτο.',
	'NO_SMILIES_PAK'	=> 'Κανένα πακέτο smilies δεν βρέθηκε.',

	'PAK_FILE_NOT_READABLE'		=> 'Δεν μπορεί να διαβάσει το <samp>.pak</samp> αρχείο.',

	'REPLACE_MATCHES'	=> 'Αντικαταστήστε τις αντιστοιχίες',

	'SELECT_PACKAGE'			=> 'Επιλέξτε ένα αρχείο πακέτου',
	'SMILIES_ADD'				=> 'Προσθήκη νέου smiley',
	'SMILIES_NONE_ADDED'			=> 'Κανένα smiley δεν έχει προστεθεί',
	'SMILIES_ONE_ADDED'				=> 'Το smiley προστέθηκε με επιτυχία.',
	'SMILIES_ADDED'				=> 'Τα smilies προστέθηκαν με επιτυχία.',
    	'SMILIES_CODE'                     => 'Κώδικας smiley ',
    	'SMILIES_CONFIG'                  => 'Ρυθμίσεις smiley',
	'SMILIES_DELETED'			=> 'Το smiley διαγράφτηκε με επιτυχία.',
	'SMILIES_EDIT'				=> 'Επεξεργασία smiley',
	'SMILIE_NO_CODE'			=> 'Τα smiley “%s” έχουν αγνοηθεί, επειδή κανένας κώδικας δεν προστέθηκε.',
	'SMILIE_NO_EMOTION'			=> 'Τα smiley “%s” έχουν αγνοηθεί, επειδή καμία περιγραφή δεν προστέθηκε.',	
	'SMILIE_NO_FILE'			=> 'Τα smiley “%s” έχουν αγνοηθεί, aεπειδή το αρχείο λείπει.',
	'SMILIES_NONE_EDITED'		=> 'Κανένα smiley δεν ενημερώθηκε.',
	'SMILIES_ONE_EDITED'		=> 'Το smiley ενημερώθηκε με επιτυχία.',
	'SMILIES_EDITED'			=> 'Τα smilies ενημερώθηκαν με επιτυχία.',
	'SMILIES_EMOTION'			=> 'Περιγραφή',
    	'SMILIES_HEIGHT'                 => 'Ύψος smiley',
	'SMILIES_IMAGE'                 => 'Εικόνα smiley',
	'SMILIES_IMPORTED'			=> 'Το πακέτο smilies εγκαταστάθηκε με επιτυχία.',
	'SMILIES_IMPORT_SUCCESS'	=> 'Το πακέτο smilies διαγράφηκε με επιτυχία.',
	'SMILIES_LOCATION'			=> 'Τοποθεσία smiley',
	'SMILIES_NOT_DISPLAYED'		=> 'Τα ακόλουθα smilies δεν θα εμφανίζονται στην σελίδα δημοσίευσης',
	'SMILIES_ORDER'				=> 'Ταξινόμηση smiley',
	'SMILIES_URL'				=> 'Εικόνα προέλευσης smiley',
	'SMILIES_WIDTH'				=> 'Πλάτος smiley',
	
	'TOO_MANY_SMILIES'			=> 'Έχετε περάσει το όριο των %d smilies',

	'WRONG_PAK_TYPE'	=> 'Το υποδεδειγμένο πακέτο περιείχε άκυρα στοιχεία.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Από αυτήν την επιτροπή ελέγχου μπορείτε να προσθέσετε, να επεξεργαστείτε και να αφαιρέσετε τις λέξεις που θα λογοκριθούν αυτόματα στις Δ. Συζητήσεις σας. Επιπλέον χρήστες δεν έχουν την άδεια να καταχωρήσουν ονόματα μελών που περιέχουν αυτές τις λέξεις. Μπορείτε να εισάγετε και χαρακτήρες μπαλαντέρ (*) στο πεδίο κειμένου. πχ., αν βάλετε *test* θα ταιριάζει το detestable, test* θα ταιριάζει το testing, *test θα τεριάζει το detest.',
	'ADD_WORD'				=> 'Προσθήκη νέας λέξης',

	'EDIT_WORD'		=> 'Επεξεργασία λογοκριτή λέξης',
	'ENTER_WORD'	=> 'Πρέπει να εισαγάγετε μια λέξη και την αντικατάστασή της.',

	'NO_WORD'	=> 'Δεν επιλέξατε λέξη για επεξεργασία.',

	'REPLACEMENT'	=> 'Αντικατάσταση',

	'UPDATE_WORD'	=> 'Ενημέρωση λογοκριτή λέξεων',

	'WORD'				=> 'Λέξη',
	'WORD_ADDED'		=> 'Ο λογοκριτής λέξης έχει προστεθεί επιτυχώς.',
	'WORD_REMOVED'		=> 'Ο επιλεγμένος λογοκριτής λέξης έχει διαγραφεί επιτυχώς.',
	'WORD_UPDATED'		=> 'Ο επιλεγμένος λογοκριτής λέξης ενημερώθηκε επιτυχώς.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Χρησιμοποιώντας αυτήν την μορφή μπορείτε να προσθέσετε, να επεξεργαστείτε, να δείτε και να διαγράψετε τους βαθμούς. Μπορείτε επίσης να δημιουργήσετε τους ειδικούς βαθμούς που μπορούν να απευθυνθούν σε ένα μέλος μέσω της διαχείριση δυνατότητας μελών.',
	'ADD_RANK'				=> 'Προσθήκη νέου βαθμού',

	'MUST_SELECT_RANK'		=> 'Πρέπει να επιλέξετε έναν βαθμό.',
	
	'NO_ASSIGNED_RANK'		=> 'Κανένας ειδικός βαθμός δεν έχει οριστεί.',
	'NO_RANK_TITLE'			=> 'Δεν έχετε καθορίσει έναν τίτλο για τον βαθμό.',
	'NO_UPDATE_RANKS'		=> 'Ο βαθμός διαγράφηκε με επιτυχία. Εντούτοις τα μέλη που χρησιμοποιούν αυτόν τον βαθμό δεν ενημερώθηκαν. Θα πρέπει να επαναρυθμίσετε με το χέρι τους βαθμούς σε αυτούς τους λογαριασμούς.',

	'RANK_ADDED'			=> 'Ο βαθμός προστέθηκε με επιτυχία.',
	'RANK_IMAGE'			=> 'Εικόνα βαθμού',
	'RANK_IMAGE_EXPLAIN'	=> 'Χρησιμοποιήστε αυτό για να καθορίσετε μια μικρή εικόνα που συνδέεται με τον βαθμό. Η διαδρομή είναι σχετική με τον κατάλογο του phpBB.',
	'RANK_IMAGE_IN_USE'		=> '(Σε χρήση)',
	'RANK_MINIMUM'			=> 'Ελάχιστες δημοσιεύσεις',
	'RANK_REMOVED'			=> 'Ο βαθμός διαγράφτηκε με επιτυχία.',
	'RANK_SPECIAL'			=> 'Θέστε ως ειδικό βαθμό',
	'RANK_TITLE'			=> 'Τίτλος βαθμού',
	'RANK_UPDATED'			=> 'Ο βαθμός ενημερώθηκε με επιτυχία.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Εδώ μπορείτε να ελέγξετε τα ονόματα μελών που δεν επιτρέπεται να χρησιμοποιηθούν. Τα απαγορευμένα ονόματα μελών επιτρέπεται να περιέχουν έναν χαρακτήρα μπαλαντέρ *.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Για ένα απαγορευμένο όνομα μελών μπορείτε να χρησιμοποιήσετε * ως σύμβολα υποκατάστατων, προκειμένου να αποκλειστεί εδώ οποιαδήποτε ένδειξη.',
	'ADD_DISALLOW_TITLE'	=> 'Προσθέστε ένα απαγορευμένο όνομα χρήστη',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Μπορείτε να αφαιρέσετε ένα απαγορευμένο όνομα μέλους με την επιλογή του ονόματος από τον κατάλογο και πατήστε υποβολή.',
	'DELETE_DISALLOW_TITLE'		=> 'Αφαιρέστε ένα απαγορευμένο όνομα μέλους',
	'DISALLOWED_ALREADY'		=> 'Το όνομα που εισαγάγατε έχει ήδη απαγορευθεί',
	'DISALLOWED_DELETED'		=> 'Το απαγορευμένο όνομα μέλους έχει αφαιρεθεί με επιτυχία.',
	'DISALLOW_SUCCESSFUL'		=> 'Το απαγορευμένο όνομα μέλους έχει προστεθεί με επιτυχία.',

	'NO_DISALLOWED'				=> 'Δεν υπάρχουν απαγορευμένα ονόματα μελών.',
	'NO_USERNAME_SPECIFIED'		=> 'Δεν έχετε επιλέξει ή δεν έχετε εισαγάγει κανένα όνομα μέλους.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Εδώ μπορείτε να διαχειριστείτε τους λόγους που χρησιμοποιούνται στις αναφορές και τα μηνύματα απόρριψης των δημοσιεύσεων. Υπάρχει ένας τυποποιημένος λόγος (που μαρκάρεται με *), ο οποίος δεν μπορεί να διαγραφεί. Αυτός ο λόγος χρησιμοποιείται κανονικά, εάν κανένας άλλος λόγος δεν έχει οριστεί.',
	'ADD_NEW_REASON'		=> 'Προσθήκη νέου λόγου',
	'AVAILABLE_TITLES'		=> 'Διαθέσιμοι εντοπισμένοι τίτλοι λόγου ',
	
	'IS_NOT_TRANSLATED'			=> 'Ο λόγος <strong>δεν</strong> έχει εντοπιστεί.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Ο λόγος <strong>δεν</strong> έχει εντοπιστεί. Εάν επιθυμείτε να δείξετε την τοποθετημένη έκδοση, δείξτε το σωστό κλειδί από το σχετικό τμήμα των γλωσσικών αρχείων.',
	'IS_TRANSLATED'				=> 'Ο λόγος έχει εντοπιστεί.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Ο λόγος έχει εντοπιστεί. Εάν ο τίτλος που εισάγεται εδώ καθορίζεται στο κατάλληλο γλωσσικό αρχείο, η εντοπισμένη μορφή του τίτλου και της περιγραφής θα χρησιμοποιηθεί.',
	
	'NO_REASON'					=> 'Ο λόγος δεν μπορεί να βρεθεί.',
	'NO_REASON_INFO'			=> 'Πρέπει να καθορίσετε έναν τίτλο και μια περιγραφή για αυτόν τον λόγο.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Δεν μπορείτε να διαγράψετε τον λόγο προεπιλογής "Άλλο".',

	'REASON_ADD'				=> 'Προσθέστε αναφοράς /απόρριψης λόγο',
	'REASON_ADDED'				=> 'Ο λόγος αναφοράς /απόρριψης προστέθηκε επιτυχώς.',
	'REASON_ALREADY_EXIST'		=> 'Ένας λόγος με αυτόν τον τίτλο υπάρχει ήδη, παρακαλώ εισάγετε έναν άλλο τίτλο για αυτόν τον λόγο.',
	'REASON_DESCRIPTION'		=> 'Περιγραφή λόγου',
	'REASON_DESC_TRANSLATED'	=> 'Εμφάνιση περιγραφής λόγου',
	'REASON_EDIT'				=> 'Επεξεργασία αναφοράς /απόρριψης λόγο',
	'REASON_EDIT_EXPLAIN'		=> 'Εδώ είστε σε θέση να προσθέσετε ή να επεξεργαστείτε έναν λόγο. Εάν ο λόγος είναι μεταφρασμένος η εντοπισμένη έκδοση χρησιμοποιείται αντί της περιγραφής που εισάγεται εδώ.',
	'REASON_REMOVED'			=> 'Ο λόγος αναφοράς/απόρριψης διαγράφηκε επιτυχώς',
	'REASON_TITLE'				=> 'Τίτλος λόγου',
	'REASON_TITLE_TRANSLATED'	=> 'Εμφάνιση τίτλο λόγου',
	'REASON_UPDATED'			=> 'Ο λόγος Αναφοράς/απόρριψης ενημερώθηκε επιτυχώς.',

	'USED_IN_REPORTS'		=> 'Χρησιμοποιήστε στις αναφορές',
));

?>
