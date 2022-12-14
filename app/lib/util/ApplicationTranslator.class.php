<?php
use Adianti\Core\AdiantiCoreTranslator;

/**
 * ApplicationTranslator
 *
 * @version    7.0
 * @package    util
 * @author     Pablo Dall'Oglio
 * @copyright  Copyright (c) 2006 Adianti Solutions Ltd. (http://www.adianti.com.br)
 * @license    http://www.adianti.com.br/framework-license
 */
class ApplicationTranslator
{
    private static $instance; // singleton instance
    private $lang;            // target language
    private $messages;
    private $sourceMessages;
    
    /**
     * Class Constructor
     */
    private function __construct()
    {
        $this->messages = [];
        $this->messages['en'] = [];
        $this->messages['en'][] = 'File not found';
        $this->messages['en'][] = 'Search';
        $this->messages['en'][] = 'Register';
        $this->messages['en'][] = 'Record saved';
        $this->messages['en'][] = 'Do you really want to delete ?';
        $this->messages['en'][] = 'Record deleted';
        $this->messages['en'][] = 'Function';
        $this->messages['en'][] = 'Table';
        $this->messages['en'][] = 'Tool';
        $this->messages['en'][] = 'Data';
        $this->messages['en'][] = 'Open';
        $this->messages['en'][] = 'New';
        $this->messages['en'][] = 'Save';
        $this->messages['en'][] = 'Find';
        $this->messages['en'][] = 'Edit';
        $this->messages['en'][] = 'Delete';
        $this->messages['en'][] = 'Cancel';
        $this->messages['en'][] = 'Yes';
        $this->messages['en'][] = 'No';
        $this->messages['en'][] = 'January';
        $this->messages['en'][] = 'February';
        $this->messages['en'][] = 'March';
        $this->messages['en'][] = 'April';
        $this->messages['en'][] = 'May';
        $this->messages['en'][] = 'June';
        $this->messages['en'][] = 'July';
        $this->messages['en'][] = 'August';
        $this->messages['en'][] = 'September';
        $this->messages['en'][] = 'October';
        $this->messages['en'][] = 'November';
        $this->messages['en'][] = 'December';
        $this->messages['en'][] = 'Today';
        $this->messages['en'][] = 'Close';
        $this->messages['en'][] = 'The field ^1 can not be less than ^2 characters';
        $this->messages['en'][] = 'The field ^1 can not be greater than ^2 characters';
        $this->messages['en'][] = 'The field ^1 can not be less than ^2';
        $this->messages['en'][] = 'The field ^1 can not be greater than ^2';
        $this->messages['en'][] = 'The field ^1 is required';
        $this->messages['en'][] = 'The field ^1 has not a valid CNPJ';
        $this->messages['en'][] = 'The field ^1 has not a valid CPF';
        $this->messages['en'][] = 'The field ^1 contains an invalid e-mail';
        $this->messages['en'][] = 'Permission denied';
        $this->messages['en'][] = 'Generate';
        $this->messages['en'][] = 'List';
        $this->messages['en'][] = 'Wrong password';
        $this->messages['en'][] = 'User not found';
        $this->messages['en'][] = 'User';
        $this->messages['en'][] = 'Users';
        $this->messages['en'][] = 'Password';
        $this->messages['en'][] = 'Login';
        $this->messages['en'][] = 'Name';
        $this->messages['en'][] = 'Group';
        $this->messages['en'][] = 'Groups';
        $this->messages['en'][] = 'Program';
        $this->messages['en'][] = 'Programs';
        $this->messages['en'][] = 'Back to the listing';
        $this->messages['en'][] = 'Controller';
        $this->messages['en'][] = 'Email';
        $this->messages['en'][] = 'Record Updated';
        $this->messages['en'][] = 'Password confirmation';
        $this->messages['en'][] = 'Front page';
        $this->messages['en'][] = 'Page name';
        $this->messages['en'][] = 'The passwords do not match';
        $this->messages['en'][] = 'Log in';
        $this->messages['en'][] = 'Date';
        $this->messages['en'][] = 'Column';
        $this->messages['en'][] = 'Operation';
        $this->messages['en'][] = 'Old value';
        $this->messages['en'][] = 'New value';
        $this->messages['en'][] = 'Database';
        $this->messages['en'][] = 'Profile';
        $this->messages['en'][] = 'Change password';
        $this->messages['en'][] = 'Leave empty to keep old password';
        $this->messages['en'][] = 'Results';
        $this->messages['en'][] = 'Invalid command';
        $this->messages['en'][] = '^1 records shown';
        $this->messages['en'][] = 'Administration';
        $this->messages['en'][] = 'SQL Panel';
        $this->messages['en'][] = 'Access Log';
        $this->messages['en'][] = 'Change Log';
        $this->messages['en'][] = 'SQL Log';
        $this->messages['en'][] = 'Clear form';
        $this->messages['en'][] = 'Send';
        $this->messages['en'][] = 'Message';
        $this->messages['en'][] = 'Messages';
        $this->messages['en'][] = 'Subject';
        $this->messages['en'][] = 'Message sent successfully';
        $this->messages['en'][] = 'Check as read';
        $this->messages['en'][] = 'Check as unread';
        $this->messages['en'][] = 'Action';
        $this->messages['en'][] = 'Read';
        $this->messages['en'][] = 'From';
        $this->messages['en'][] = 'Checked';
        $this->messages['en'][] = 'Object ^1 not found in ^2';
        $this->messages['en'][] = 'Notification';
        $this->messages['en'][] = 'Notifications';
        $this->messages['en'][] = 'Categories';
        $this->messages['en'][] = 'Send document';
        $this->messages['en'][] = 'My documents';
        $this->messages['en'][] = 'Shared with me';
        $this->messages['en'][] = 'Document';
        $this->messages['en'][] = 'File';
        $this->messages['en'][] = 'Title';
        $this->messages['en'][] = 'Description';
        $this->messages['en'][] = 'Category';
        $this->messages['en'][] = 'Submission date';
        $this->messages['en'][] = 'Archive date';
        $this->messages['en'][] = 'Upload';
        $this->messages['en'][] = 'Download';
        $this->messages['en'][] = 'Next';
        $this->messages['en'][] = 'Documents';
        $this->messages['en'][] = 'Permission';
        $this->messages['en'][] = 'Unit';
        $this->messages['en'][] = 'Units';
        $this->messages['en'][] = 'Add';
        $this->messages['en'][] = 'Active';
        $this->messages['en'][] = 'Activate/Deactivate';
        $this->messages['en'][] = 'Inactive user';
        $this->messages['en'][] = 'Send message';
        $this->messages['en'][] = 'Read messages';
        $this->messages['en'][] = 'An user with this login is already registered';
        $this->messages['en'][] = 'Access Stats';
        $this->messages['en'][] = 'Accesses';
        $this->messages['en'][] = 'Preferences';
        $this->messages['en'][] = 'Mail from';
        $this->messages['en'][] = 'SMTP Auth';
        $this->messages['en'][] = 'SMTP Host';
        $this->messages['en'][] = 'SMTP Port';
        $this->messages['en'][] = 'SMTP User';
        $this->messages['en'][] = 'SMTP Pass';
        $this->messages['en'][] = 'Ticket';
        $this->messages['en'][] = 'Open ticket';
        $this->messages['en'][] = 'Support mail';
        $this->messages['en'][] = 'Day';
        $this->messages['en'][] = 'Folders';
        $this->messages['en'][] = 'Compose';
        $this->messages['en'][] = 'Inbox';
        $this->messages['en'][] = 'Sent';
        $this->messages['en'][] = 'Archived';
        $this->messages['en'][] = 'Archive';
        $this->messages['en'][] = 'Recover';
        $this->messages['en'][] = 'Value';
        $this->messages['en'][] = 'View all';
        $this->messages['en'][] = 'Reload';
        $this->messages['en'][] = 'Back';
        $this->messages['en'][] = 'Clear';
        $this->messages['en'][] = 'View';
        $this->messages['en'][] = 'No records found';
        $this->messages['en'][] = 'Drawing successfully generated';
        $this->messages['en'][] = 'QR Codes successfully generated';
        $this->messages['en'][] = 'Barcodes successfully generated';
        $this->messages['en'][] = 'Document successfully generated';
        $this->messages['en'][] = 'Value';
        $this->messages['en'][] = 'User';
        $this->messages['en'][] = 'Password';
        $this->messages['en'][] = 'Port';
        $this->messages['en'][] = 'Database type';
        $this->messages['en'][] = 'Root user';
        $this->messages['en'][] = 'Root password';
        $this->messages['en'][] = 'Create database/user';
        $this->messages['en'][] = 'Test connection';
        $this->messages['en'][] = 'Database name';
        $this->messages['en'][] = 'Insert permissions/programs';
        $this->messages['en'][] = 'Database and user created successfully';
        $this->messages['en'][] = 'Permissions and programs successfully inserted';
        $this->messages['en'][] = 'Update config';
        $this->messages['en'][] = 'Configuration file: ^1 updated successfully';
        $this->messages['en'][] = 'Connection successfully completed';
        $this->messages['en'][] = "The database ^1 doesn't exists";
        $this->messages['en'][] = 'Permissions/programs successfully inserted';
        $this->messages['en'][] = 'Programs/permissions have already been inserted';
        $this->messages['en'][] = 'Installing your application';
        $this->messages['en'][] = 'PHP version verification and installed extensions';
        $this->messages['en'][] = 'PHP verification';
        $this->messages['en'][] = 'Directory and files verification';
        $this->messages['en'][] = 'Database configuration/creation';
        $this->messages['en'][] = 'Admin user';
        $this->messages['en'][] = 'Admin password';
        $this->messages['en'][] = 'Insert data';
        $this->messages['en'][] = 'Of database:';
        $this->messages['en'][] = 'Connecton to database ^1 failed';
        $this->messages['en'][] = 'Install';
        $this->messages['en'][] = 'Databases successfully installed';
        $this->messages['en'][] = 'Databases have already been installed';
        $this->messages['en'][] = 'Main unit';
        $this->messages['en'][] = 'Time';
        $this->messages['en'][] = 'Type';
        $this->messages['en'][] = 'Failed to read error log (^1)';
        $this->messages['en'][] = 'Error log (^1) is not writable by web server user, so the messages may be incomplete';
        $this->messages['en'][] = 'Check the owner of the log file. He must be the same as the web user (usually www-data, www, etc)';
        $this->messages['en'][] = 'Error log is empty or has not been configured correctly. Define the error log file, setting <b>error_log</b> at php.ini';
        $this->messages['en'][] = 'Errors are not being logged. Please turn <b>log_errors = On</b> at php.ini';
        $this->messages['en'][] = 'Errors are not currently being displayd because the <b>display_errors</b> is set to Off in php.ini';
        $this->messages['en'][] = 'This configuration is usually recommended for production, not development purposes';
        $this->messages['en'][] = 'The php.ini current location is <b>^1</b>';
        $this->messages['en'][] = 'The error log current location is <b>^1</b>';
        $this->messages['en'][] = 'PHP Log';
        $this->messages['en'][] = 'Database explorer';
        $this->messages['en'][] = 'Tables';
        $this->messages['en'][] = 'Report generated. Please, enable popups';
        $this->messages['en'][] = 'File saved';
        $this->messages['en'][] = 'Edit page';
        $this->messages['en'][] = 'Update page';
        $this->messages['en'][] = 'Module';
        $this->messages['en'][] = 'Directory';
        $this->messages['en'][] = 'Source code';
        $this->messages['en'][] = 'Invalid return';
        $this->messages['en'][] = 'Page';
        $this->messages['en'][] = 'Connection failed';
        $this->messages['en'][] = 'Summary database install';
        $this->messages['en'][] = 'No write permission on file';
        $this->messages['en'][] = 'In order to continue with the installation you must grant read permission to the directory';
        $this->messages['en'][] = 'In order to continue with the installation you must grant write permission to the directory';
        $this->messages['en'][] = 'Installed';
        $this->messages['en'][] = 'Path';
        $this->messages['en'][] = 'File';
        $this->messages['en'][] = 'Write';
        $this->messages['en'][] = 'Read';
        $this->messages['en'][] = 'In order to continue with the installation you must grant read permission to the file';
        $this->messages['en'][] = 'In order to continue with the installation you must grant write permission to the file';
        $this->messages['en'][] = 'Photo';
        $this->messages['en'][] = 'Reset password';
        $this->messages['en'][] = 'A new seed is required in the application.ini for security reasons';
        $this->messages['en'][] = 'Password reset';
        $this->messages['en'][] = 'Token expired. This operation is not allowed';
        $this->messages['en'][] = 'The password has been changed';
        $this->messages['en'][] = 'An user with this e-mail is already registered';
        $this->messages['en'][] = 'Invalid LDAP credentials';
        $this->messages['en'][] = 'Update menu overwriting existing file?';
        $this->messages['en'][] = 'Menu updated successfully';
        $this->messages['en'][] = 'Menu path';
        $this->messages['en'][] = 'Add to menu';
        $this->messages['en'][] = 'Remove from menu';
        $this->messages['en'][] = 'Item removed from menu';
        $this->messages['en'][] = 'Item added to menu';
        $this->messages['en'][] = 'Icon';
        $this->messages['en'][] = 'User registration';
        $this->messages['en'][] = 'The user registration is disabled';
        $this->messages['en'][] = 'The password reset is disabled';
        $this->messages['en'][] = 'Account created';
        $this->messages['en'][] = 'Create account';
        $this->messages['en'][] = 'If you want to reinstall edit the file app/config/install.ini and change installed = 1 to installed = 0. Erase the content in app/config/installed.ini too';
        $this->messages['en'][] = 'Authorization error';
        $this->messages['en'][] = 'Exit';
        $this->messages['en'][] = 'REST key not defined';
        $this->messages['en'][] = 'Local';
        $this->messages['en'][] = 'Remote';
        $this->messages['en'][] = 'Success';
        $this->messages['en'][] = 'Error';
        $this->messages['en'][] = 'Status';
        $this->messages['en'][] = 'Update permissions?';
        $this->messages['en'][] = 'Changed';
        $this->messages['en'][] = 'Add item above';
        $this->messages['en'][] = 'Add item below';
        $this->messages['en'][] = 'Add child item';
        $this->messages['en'][] = 'Remove item';
        $this->messages['en'][] = 'Move item';
        $this->messages['en'][] = 'Menu editor';
        $this->messages['en'][] = 'Order';
        $this->messages['en'][] = 'Label';
        $this->messages['en'][] = 'Color';
        $this->messages['en'][] = 'Menu saved';
        $this->messages['en'][] = 'Clone';
        $this->messages['en'][] = 'Impersonation';
        $this->messages['en'][] = 'Impersonated';
        $this->messages['en'][] = 'Execution trace';
        $this->messages['en'][] = 'Session';
        $this->messages['en'][] = 'Request Log';
        $this->messages['en'][] = 'Method';
        $this->messages['en'][] = 'Request';
        $this->messages['en'][] = 'Users by group';
        $this->messages['en'][] = 'Count';
        $this->messages['en'][] = 'Users by unit';
        $this->messages['en'][] = 'Save as PDF';
        $this->messages['en'][] = 'Save as CSV';
        $this->messages['en'][] = 'Save as XML';
        $this->messages['en'][] = 'Export';
        $this->messages['en'][] = 'System information';
        $this->messages['en'][] = 'RAM Memory';
        $this->messages['en'][] = 'Using/Total';
        $this->messages['en'][] = 'Free';
        $this->messages['en'][] = 'Percentage used';
        $this->messages['en'][] = 'CPU usage';
        $this->messages['en'][] = 'Vendor';
        $this->messages['en'][] = 'Model';
        $this->messages['en'][] = 'Current Frequency';
        $this->messages['en'][] = 'Webserver and Process';
        $this->messages['en'][] = 'Disk devices';
        $this->messages['en'][] = 'Device';
        $this->messages['en'][] = 'Mount point';
        $this->messages['en'][] = 'Filesystem';
        $this->messages['en'][] = 'Network devices';
        $this->messages['en'][] = 'Device name';
        $this->messages['en'][] = 'Port speed';
        $this->messages['en'][] = 'Sent';
        $this->messages['en'][] = 'Recieved';
        $this->messages['en'][] = 'Print';
        $this->messages['en'][] = 'Delete session var';
        $this->messages['en'][] = 'Impersonated by';
        $this->messages['en'][] = 'Unauthorized access to that unit';
        $this->messages['en'][] = 'Files diff';
        $this->messages['en'][] = 'Removed';
        $this->messages['en'][] = 'Equal';
        $this->messages['en'][] = 'Modified';
        $this->messages['en'][] = 'Terms of use and privacy policy';
        $this->messages['en'][] = 'Accept';
        $this->messages['en'][] = 'I have read and agree to the terms of use and privacy policy';
        $this->messages['en'][] = 'You need read and agree to the terms of use and privacy policy';
        $this->messages['en'][] = 'Login to your account';
        $this->messages['en'][] = 'You have just successfully logged in to ^1. If you do not recognize this login, contact technical support';

        // 7.5
        $this->messages['en'][] = 'Click here for more information';
        $this->messages['en'][] = 'You have already registered this password';
        $this->messages['en'][] = 'Renewal password';
        $this->messages['en'][] = 'You need to renew your password, as we have identified that you have not changed it for more than ^1 days';
        $this->messages['en'][] = 'Global search';
        $this->messages['en'][] = 'More';
        $this->messages['en'][] = 'Upload file';
        $this->messages['en'][] = 'New folder';
        $this->messages['en'][] = 'Folder';
        $this->messages['en'][] = 'This operation is not allowed';
        $this->messages['en'][] = 'Parent folder';
        $this->messages['en'][] = 'Sent out';
        $this->messages['en'][] = 'Sent to trash';
        $this->messages['en'][] = 'Sent to ^1';
        $this->messages['en'][] = 'Bookmarked';
        $this->messages['en'][] = 'Bookmarks';
        $this->messages['en'][] = 'Trash';
        $this->messages['en'][] = 'Send to trash';
        $this->messages['en'][] = 'Set bookmark';
        $this->messages['en'][] = 'Remove from bookmark';
        $this->messages['en'][] = 'Remove from trash';
        $this->messages['en'][] = 'Restored';
        $this->messages['en'][] = 'Share';
        $this->messages['en'][] = 'Details';
        $this->messages['en'][] = 'Permanently delete';
        $this->messages['en'][] = 'This will remove all the contents of the folder';
        $this->messages['en'][] = 'Created at';
        $this->messages['en'][] = 'Updated at';
        $this->messages['en'][] = 'Have posts with this tag, please inactive';
        $this->messages['en'][] = 'Post';
        $this->messages['en'][] = 'Posts';
        $this->messages['en'][] = 'Created by';
        $this->messages['en'][] = 'until';
        $this->messages['en'][] = 'Content';
        $this->messages['en'][] = 'Preview';
        $this->messages['en'][] = 'Notices';
        $this->messages['en'][] = 'Like';
        $this->messages['en'][] = 'Comment';
        $this->messages['en'][] = 'Comments';
        $this->messages['en'][] = 'Likes';
        $this->messages['en'][] = 'See more';
        $this->messages['en'][] = 'Phone';
        $this->messages['en'][] = 'Address';
        $this->messages['en'][] = 'Function';
        $this->messages['en'][] = 'About';
        $this->messages['en'][] = 'Expand';
        $this->messages['en'][] = 'Contacts';
        $this->messages['en'][] = 'Call';
        $this->messages['en'][] = 'Searchable';
        $this->messages['en'][] = 'Add wiki link';
        $this->messages['en'][] = 'Last modification';
        $this->messages['en'][] = 'Page management';
        $this->messages['en'][] = 'Search pages';
        $this->messages['en'][] = 'News management';
        $this->messages['en'][] = 'List news';
        $this->messages['en'][] = 'Properties';
        //fim
        
        $this->messages['pt'] = [];
        $this->messages['pt'][] = 'Arquivo n??o encontrado';
        $this->messages['pt'][] = 'Buscar';
        $this->messages['pt'][] = 'Cadastrar';
        $this->messages['pt'][] = 'Registro salvo';
        $this->messages['pt'][] = 'Deseja realmente excluir ?';
        $this->messages['pt'][] = 'Registro exclu??do';
        $this->messages['pt'][] = 'Fun????o';
        $this->messages['pt'][] = 'Tabela';
        $this->messages['pt'][] = 'Ferramenta';
        $this->messages['pt'][] = 'Dados';
        $this->messages['pt'][] = 'Abrir';
        $this->messages['pt'][] = 'Novo';
        $this->messages['pt'][] = 'Salvar';
        $this->messages['pt'][] = 'Buscar';
        $this->messages['pt'][] = 'Editar';
        $this->messages['pt'][] = 'Excluir';
        $this->messages['pt'][] = 'Cancelar';
        $this->messages['pt'][] = 'Sim';
        $this->messages['pt'][] = 'N??o';
        $this->messages['pt'][] = 'Janeiro';
        $this->messages['pt'][] = 'Fevereiro';
        $this->messages['pt'][] = 'Mar??o';
        $this->messages['pt'][] = 'Abril';
        $this->messages['pt'][] = 'Maio';
        $this->messages['pt'][] = 'Junho';
        $this->messages['pt'][] = 'Julho';
        $this->messages['pt'][] = 'Agosto';
        $this->messages['pt'][] = 'Setembro';
        $this->messages['pt'][] = 'Outubro';
        $this->messages['pt'][] = 'Novembro';
        $this->messages['pt'][] = 'Dezembro';
        $this->messages['pt'][] = 'Hoje';
        $this->messages['pt'][] = 'Fechar';
        $this->messages['pt'][] = 'O campo ^1 n??o pode ter menos de ^2 caracteres';
        $this->messages['pt'][] = 'O campo ^1 n??o pode ter mais de ^2 caracteres';
        $this->messages['pt'][] = 'O campo ^1 n??o pode ser menor que ^2';
        $this->messages['pt'][] = 'O campo ^1 n??o pode ser maior que ^2';
        $this->messages['pt'][] = 'O campo ^1 ?? obrigat??rio';
        $this->messages['pt'][] = 'O campo ^1 n??o cont??m um CNPJ v??lido';
        $this->messages['pt'][] = 'O campo ^1 n??o cont??m um CPF v??lido';
        $this->messages['pt'][] = 'O campo ^1 cont??m um e-mail inv??lido';
        $this->messages['pt'][] = 'Permiss??o negada';
        $this->messages['pt'][] = 'Gerar';
        $this->messages['pt'][] = 'Listar';
        $this->messages['pt'][] = 'Senha errada';
        $this->messages['pt'][] = 'Usu??rio n??o encontrado';
        $this->messages['pt'][] = 'Usu??rio';
        $this->messages['pt'][] = 'Usu??rios';
        $this->messages['pt'][] = 'Senha';
        $this->messages['pt'][] = 'Login';
        $this->messages['pt'][] = 'Nome';
        $this->messages['pt'][] = 'Grupo';
        $this->messages['pt'][] = 'Grupos';
        $this->messages['pt'][] = 'Programa';
        $this->messages['pt'][] = 'Programas';
        $this->messages['pt'][] = 'Voltar para a listagem';
        $this->messages['pt'][] = 'Classe de controle';
        $this->messages['pt'][] = 'Email';
        $this->messages['pt'][] = 'Registro atualizado';
        $this->messages['pt'][] = 'Confirma senha';
        $this->messages['pt'][] = 'Tela inicial';
        $this->messages['pt'][] = 'Nome da Tela';
        $this->messages['pt'][] = 'As senhas n??o conferem';
        $this->messages['pt'][] = 'Entrar';
        $this->messages['pt'][] = 'Data';
        $this->messages['pt'][] = 'Coluna';
        $this->messages['pt'][] = 'Opera????o';
        $this->messages['pt'][] = 'Valor antigo';
        $this->messages['pt'][] = 'Valor novo';
        $this->messages['pt'][] = 'Banco de dados';
        $this->messages['pt'][] = 'Perfil';
        $this->messages['pt'][] = 'Mudar senha';
        $this->messages['pt'][] = 'Deixe vazio para manter a senha anterior';
        $this->messages['pt'][] = 'Resultados';
        $this->messages['pt'][] = 'Comando inv??lido';
        $this->messages['pt'][] = '^1 registros exibidos';
        $this->messages['pt'][] = 'Administra????o';
        $this->messages['pt'][] = 'Painel SQL';
        $this->messages['pt'][] = 'Log de acesso';
        $this->messages['pt'][] = 'Log de altera????es';
        $this->messages['pt'][] = 'Log de SQL';
        $this->messages['pt'][] = 'Limpar formul??rio';
        $this->messages['pt'][] = 'Enviar';
        $this->messages['pt'][] = 'Mensagem';
        $this->messages['pt'][] = 'Mensagens';
        $this->messages['pt'][] = 'Assunto';
        $this->messages['pt'][] = 'Mensagem enviada com sucesso';
        $this->messages['pt'][] = 'Marcar como lida';
        $this->messages['pt'][] = 'Marcar como n??o lida';
        $this->messages['pt'][] = 'A????o';
        $this->messages['pt'][] = 'Ler';
        $this->messages['pt'][] = 'Origem';
        $this->messages['pt'][] = 'Verificado';
        $this->messages['pt'][] = 'Objeto ^1 n??o encontrado em ^2';
        $this->messages['pt'][] = 'Notifica????o';
        $this->messages['pt'][] = 'Notifica????es';
        $this->messages['pt'][] = 'Categorias';
        $this->messages['pt'][] = 'Enviar documentos';
        $this->messages['pt'][] = 'Meus documentos';
        $this->messages['pt'][] = 'Compartilhados comigo';
        $this->messages['pt'][] = 'Documento';
        $this->messages['pt'][] = 'Arquivo';
        $this->messages['pt'][] = 'T??tulo';
        $this->messages['pt'][] = 'Descri????o';
        $this->messages['pt'][] = 'Categoria';
        $this->messages['pt'][] = 'Data de submiss??o';
        $this->messages['pt'][] = 'Data de arquivamento';
        $this->messages['pt'][] = 'Upload';
        $this->messages['pt'][] = 'Download';
        $this->messages['pt'][] = 'Pr??ximo';
        $this->messages['pt'][] = 'Documentos';
        $this->messages['pt'][] = 'Permiss??o';
        $this->messages['pt'][] = 'Unidade';
        $this->messages['pt'][] = 'Unidades';
        $this->messages['pt'][] = 'Adiciona';
        $this->messages['pt'][] = 'Ativo';
        $this->messages['pt'][] = 'Ativar/desativar';
        $this->messages['pt'][] = 'Usu??rio inativo';
        $this->messages['pt'][] = 'Envia mensagem';
        $this->messages['pt'][] = 'Ler mensagens';
        $this->messages['pt'][] = 'Um usu??rio j?? est?? cadastrado com este login';
        $this->messages['pt'][] = 'Estat??sticas de acesso';
        $this->messages['pt'][] = 'Acessos';
        $this->messages['pt'][] = 'Prefer??ncias';
        $this->messages['pt'][] = 'E-mail de origem';
        $this->messages['pt'][] = 'Autentica SMTP';
        $this->messages['pt'][] = 'Host SMTP';
        $this->messages['pt'][] = 'Porta SMTP';
        $this->messages['pt'][] = 'Usu??rio SMTP';
        $this->messages['pt'][] = 'Senha SMTP';
        $this->messages['pt'][] = 'Ticket';
        $this->messages['pt'][] = 'Abrir ticket';
        $this->messages['pt'][] = 'Email de suporte';
        $this->messages['pt'][] = 'Dia';
        $this->messages['pt'][] = 'Pastas';
        $this->messages['pt'][] = 'Escrever';
        $this->messages['pt'][] = 'Entrada';
        $this->messages['pt'][] = 'Enviados';
        $this->messages['pt'][] = 'Arquivados';
        $this->messages['pt'][] = 'Arquivar';
        $this->messages['pt'][] = 'Recuperar';
        $this->messages['pt'][] = 'Valor';
        $this->messages['pt'][] = 'Ver todos';
        $this->messages['pt'][] = 'Recarregar';
        $this->messages['pt'][] = 'Voltar';
        $this->messages['pt'][] = 'Limpar';
        $this->messages['pt'][] = 'Visualizar';
        $this->messages['pt'][] = 'Nenhum registro foi encontrado';
        $this->messages['pt'][] = 'Desenho gerado com sucesso';
        $this->messages['pt'][] = 'QR codes gerados com sucesso';
        $this->messages['pt'][] = 'C??digos de barra gerados com sucesso';
        $this->messages['pt'][] = 'Documento gerado com sucesso';
        $this->messages['pt'][] = 'Valor';
        $this->messages['pt'][] = 'Usu??rio';
        $this->messages['pt'][] = 'Senha';
        $this->messages['pt'][] = 'Porta';
        $this->messages['pt'][] = 'Tipo da base de dados';
        $this->messages['pt'][] = 'Usu??rio admin';
        $this->messages['pt'][] = 'Senha do usu??rio admin';
        $this->messages['pt'][] = 'Criar base de dados/usu??rio';
        $this->messages['pt'][] = 'Testar conex??o';
        $this->messages['pt'][] = 'Nome da base de dados';
        $this->messages['pt'][] = 'Inserir permiss??es/programas';
        $this->messages['pt'][] = 'Base de dados e usu??rio criado com sucesso';
        $this->messages['pt'][] = 'Permiss??es e programas inseridos com sucesso';
        $this->messages['pt'][] = 'Atualizar config';
        $this->messages['pt'][] = 'Arquivo de configura????o: ^1 atualizado com sucesso';
        $this->messages['pt'][] = 'Conex??o realizada com sucesso';
        $this->messages['pt'][] = 'A base de dados ^1 n??o existe';
        $this->messages['pt'][] = 'Permiss??es/programas inseridos com sucesso';
        $this->messages['pt'][] = 'Os programas/permiss??es j?? foram inseridos';
        $this->messages['pt'][] = 'Instalando a sua aplica????o';
        $this->messages['pt'][] = 'Verifica????o da vers??o do PHP e extens??es instaladas';
        $this->messages['pt'][] = 'Verifica????o do PHP';
        $this->messages['pt'][] = 'Verifica????o de diret??rios e arquivos';
        $this->messages['pt'][] = 'Configura????o/cria????o de base de dados';
        $this->messages['pt'][] = 'Usu??rio admin';
        $this->messages['pt'][] = 'Senha do usu??rio admin';
        $this->messages['pt'][] = 'Inserir dados';
        $this->messages['pt'][] = 'Da base de dados:';
        $this->messages['pt'][] = 'A conex??o com a base de dados ^1 falhou';
        $this->messages['pt'][] = 'Instalar';
        $this->messages['pt'][] = 'Bases de dados instaladas com sucesso';
        $this->messages['pt'][] = 'As bases de dados j?? foram instaladas';
        $this->messages['pt'][] = 'Unidade principal';
        $this->messages['pt'][] = 'Hora';
        $this->messages['pt'][] = 'Tipo';
        $this->messages['pt'][] = 'Falha ao ler o log de erros (^1)';
        $this->messages['pt'][] = 'O log de erros (^1) n??o permite escrita pelo usu??rio web, assim as mensagens devem estar incompletas';
        $this->messages['pt'][] = 'Revise o propriet??rio do arquivo de log. Ele deve ser igual ao usu??rio web (geralmente www-data, www, etc)';
        $this->messages['pt'][] = 'Log de erros est?? vazio ou n??o foi configurado corretamente. Defina o arquivo de log de erros, configurando <b>error_log</b> no php.ini';
        $this->messages['pt'][] = 'Erros n??o est??o sendo registrados. Por favor, mude <b>log_errors = On</b> no php.ini';
        $this->messages['pt'][] = 'Erros n??o est??o atualmente sendo exibidos por que <b>display_errors</b> est?? configurado para Off no php.ini';
        $this->messages['pt'][] = 'Esta configura????o normalmente ?? recomendada para produ????o, n??o para o prop??sito de desenvolvimento';
        $this->messages['pt'][] = 'A localiza????o atual do php.ini ?? <b>^1</b>';
        $this->messages['pt'][] = 'A localiza????o atual do log de erros ?? <b>^1</b>';
        $this->messages['pt'][] = 'Log do PHP';
        $this->messages['pt'][] = 'Database explorer';
        $this->messages['pt'][] = 'Tabelas';
        $this->messages['pt'][] = 'Relat??rio gerado. Favor, habilitar os popups';
        $this->messages['pt'][] = 'Arquivo salvo';
        $this->messages['pt'][] = 'Editar p??gina';
        $this->messages['pt'][] = 'Atualizar p??gina';
        $this->messages['pt'][] = 'M??dulo';
        $this->messages['pt'][] = 'Diret??rio';
        $this->messages['pt'][] = 'C??digo-fonte';
        $this->messages['pt'][] = 'Retorno inv??lido';
        $this->messages['pt'][] = 'P??gina';
        $this->messages['pt'][] = 'Falhas na conex??o';
        $this->messages['pt'][] = 'Resumo da instala????o da base de dados';
        $this->messages['pt'][] = 'Sem permiss??o de escrita no arquivo';
        $this->messages['pt'][] = 'Para que seja poss??vel continuar com a instala????o voc?? deve conceder permiss??o de leitura para o diret??rio';
        $this->messages['pt'][] = 'Para que seja poss??vel continuar com a instala????o voc?? deve conceder permiss??o de escrita para o diret??rio';
        $this->messages['pt'][] = 'Instalada';
        $this->messages['pt'][] = 'Diret??rio';
        $this->messages['pt'][] = 'Arquivo';
        $this->messages['pt'][] = 'Escrita';
        $this->messages['pt'][] = 'Leitura';
        $this->messages['pt'][] = 'Para que seja poss??vel continuar com a instala????o voc?? deve conceder permiss??o de leitura para o arquivo';
        $this->messages['pt'][] = 'Para que seja poss??vel continuar com a instala????o voc?? deve conceder permiss??o de escrita para o arquivo';
        $this->messages['pt'][] = 'Foto';
        $this->messages['pt'][] = 'Redefinir senha';
        $this->messages['pt'][] = 'Uma nova seed ?? necess??ria no application.ini por motivos de seguran??a';
        $this->messages['pt'][] = 'Troca de senha';
        $this->messages['pt'][] = 'Token expirado. Esta opera????o n??o ?? permitida';
        $this->messages['pt'][] = 'A senha foi alterada';
        $this->messages['pt'][] = 'Um usu??rio j?? est?? cadastrado com este e-mail';
        $this->messages['pt'][] = 'Credenciais LDAP erradas';
        $this->messages['pt'][] = 'Atualizar o menu sobregravando arquivo existente?';
        $this->messages['pt'][] = 'Menu atualizado com sucesso';
        $this->messages['pt'][] = 'Caminho menu';
        $this->messages['pt'][] = 'Adiciona ao menu';
        $this->messages['pt'][] = 'Remove do menu';
        $this->messages['pt'][] = 'Item removido do menu';
        $this->messages['pt'][] = 'Item adicionado ao menu';
        $this->messages['pt'][] = '??cone';
        $this->messages['pt'][] = 'Cadastro de usu??rio';
        $this->messages['pt'][] = 'O cadastro de usu??rios est?? desabilitado';
        $this->messages['pt'][] = 'A recupera????o de senhas est?? desabilitada';
        $this->messages['pt'][] = 'Conta criada';
        $this->messages['pt'][] = 'Criar conta';
        $this->messages['pt'][] = 'Se voc?? deseja reinstalar, edite o arquivo app/config/install.ini e altere installed = 1 para installed = 0. Apague o conte??do no arquivo app/config/install.ini tamb??m';
        $this->messages['pt'][] = 'Erro de autoriza????o';
        $this->messages['pt'][] = 'Sair';
        $this->messages['pt'][] = 'Chave REST n??o definida';
        $this->messages['pt'][] = 'Local';
        $this->messages['pt'][] = 'Remoto';
        $this->messages['pt'][] = 'Sucesso';
        $this->messages['pt'][] = 'Erro';
        $this->messages['pt'][] = 'Status';
        $this->messages['pt'][] = 'Atualiza permiss??es?';
        $this->messages['pt'][] = 'Modificado';
        $this->messages['pt'][] = 'Adiciona item acima';
        $this->messages['pt'][] = 'Adiciona item abaixo';
        $this->messages['pt'][] = 'Adiciona item filho';
        $this->messages['pt'][] = 'Remover item';
        $this->messages['pt'][] = 'Mover item';
        $this->messages['pt'][] = 'Editor de menu';
        $this->messages['pt'][] = 'Ordena????o';
        $this->messages['pt'][] = 'R??tulo';
        $this->messages['pt'][] = 'Cor';
        $this->messages['pt'][] = 'Menu salvo';
        $this->messages['pt'][] = 'Clonar';
        $this->messages['pt'][] = 'Personificar';
        $this->messages['pt'][] = 'Personificado';
        $this->messages['pt'][] = 'Rastreamento da execu????o';
        $this->messages['pt'][] = 'Sess??o';
        $this->messages['pt'][] = 'Log de request';
        $this->messages['pt'][] = 'M??todo';
        $this->messages['pt'][] = 'Requisi????o';
        $this->messages['pt'][] = 'Usu??rios por grupo';
        $this->messages['pt'][] = 'Quantidade';
        $this->messages['pt'][] = 'Usu??rios por unidade';
        $this->messages['pt'][] = 'Salvar como PDF';
        $this->messages['pt'][] = 'Salvar como CSV';
        $this->messages['pt'][] = 'Salvar como XML';
        $this->messages['pt'][] = 'Exportar';
        $this->messages['pt'][] = 'Informac????es do sistema';
        $this->messages['pt'][] = 'Mem??ria RAM';
        $this->messages['pt'][] = 'Usando/Total';
        $this->messages['pt'][] = 'Dispon??vel';
        $this->messages['pt'][] = 'Percentual usado';
        $this->messages['pt'][] = 'Uso da CPU';
        $this->messages['pt'][] = 'Fornecedor';
        $this->messages['pt'][] = 'Modelo';
        $this->messages['pt'][] = 'Frequ??ncia atual';
        $this->messages['pt'][] = 'Servidor web e processos';
        $this->messages['pt'][] = 'Dispositivos de disco';
        $this->messages['pt'][] = 'Dispositivo';
        $this->messages['pt'][] = 'Ponto de montagem';
        $this->messages['pt'][] = 'Sistema de arquivos';
        $this->messages['pt'][] = 'Dispositivos de rede';
        $this->messages['pt'][] = 'Nome do dispositivo';
        $this->messages['pt'][] = 'Velocidade da porta';
        $this->messages['pt'][] = 'Enviados';
        $this->messages['pt'][] = 'Recebidos';
        $this->messages['pt'][] = 'Imprimir';
        $this->messages['pt'][] = 'Exclui vari??vel de sess??o';
        $this->messages['pt'][] = 'Personificado por';
        $this->messages['pt'][] = 'Acesso n??o autorizado ?? esta unidade';
        $this->messages['pt'][] = 'Diferen??a de arquivos';
        $this->messages['pt'][] = 'Removido';
        $this->messages['pt'][] = 'Igual';
        $this->messages['pt'][] = 'Modificado';
        $this->messages['pt'][] = 'Termo de uso e pol??tica de privacidade';
        $this->messages['pt'][] = 'Aceitar';
        $this->messages['pt'][] = 'Eu li e concordo com os termos de uso e pol??tica de privacidade';
        $this->messages['pt'][] = 'Voc?? precisa ler e concordar com os termos de uso e pol??tica de privacidade';
        $this->messages['pt'][] = 'Login realizado em sua conta';
        $this->messages['pt'][] = 'Voc?? acaba de efetuar login com sucesso no ^1. Se n??o reconhece esse login, entre em contato com o suporte t??cnico.';

        // 7.5
        $this->messages['pt'][] = 'Clique aqui para obter mais informa????es';
        $this->messages['pt'][] = 'Voc?? j?? cadastrou essa senha';
        $this->messages['pt'][] = 'Renova????o de senha';
        $this->messages['pt'][] = 'Voc?? precisa renovar sua senha, pois identificamos que voc?? n??o a altera h?? mais de ^1 dias';
        $this->messages['pt'][] = 'Busca global';
        $this->messages['pt'][] = 'Mais';
        $this->messages['pt'][] = 'Adicionar arquivo';
        $this->messages['pt'][] = 'Nova pasta';
        $this->messages['pt'][] = 'Pasta';
        $this->messages['pt'][] = 'Esta opera????o n??o ?? permitida';
        $this->messages['pt'][] = 'Pasta pai';
        $this->messages['pt'][] = 'Enviado para fora';
        $this->messages['pt'][] = 'Enviado para lixeira';
        $this->messages['pt'][] = 'Enviado para ^1';
        $this->messages['pt'][] = 'Marcado como favorito';
        $this->messages['pt'][] = 'Favoritos';
        $this->messages['pt'][] = 'Lixeira';
        $this->messages['pt'][] = 'Enviar para lixeira';
        $this->messages['pt'][] = 'Marcar como favorito';
        $this->messages['pt'][] = 'Remover dos favoritos';
        $this->messages['pt'][] = 'Remover da lixeira';
        $this->messages['pt'][] = 'Restaurado';
        $this->messages['pt'][] = 'Compartilhar';
        $this->messages['pt'][] = 'Detalhes';
        $this->messages['pt'][] = 'Remover permanentemente';
        $this->messages['pt'][] = 'Isso ir?? remover todos o conteudo da pasta';
        $this->messages['pt'][] = 'Criado em';
        $this->messages['pt'][] = 'Atualizado em';
        $this->messages['pt'][] = 'Tem postagens com essa tag, por favor inative';
        $this->messages['pt'][] = 'Publica????o';
        $this->messages['pt'][] = 'Publica????es';
        $this->messages['pt'][] = 'Criado por';
        $this->messages['pt'][] = 'at??';
        $this->messages['pt'][] = 'Conte??do';
        $this->messages['pt'][] = 'Pr??-visualiza????o';
        $this->messages['pt'][] = 'Not??cias';
        $this->messages['pt'][] = 'Curtir';
        $this->messages['pt'][] = 'Comentar';
        $this->messages['pt'][] = 'Coment??rios';
        $this->messages['pt'][] = 'Curtidas';
        $this->messages['pt'][] = 'Ver mais';
        $this->messages['pt'][] = 'Telefone';
        $this->messages['pt'][] = 'Endere??o';
        $this->messages['pt'][] = 'Fun????o';
        $this->messages['pt'][] = 'Sobre';
        $this->messages['pt'][] = 'Expandir';
        $this->messages['pt'][] = 'Contatos';
        $this->messages['pt'][] = 'Ligar';
        $this->messages['pt'][] = 'Pesquis??vel';
        $this->messages['pt'][] = 'Adicionar link da wiki';
        $this->messages['pt'][] = '??ltima modifica????o';
        $this->messages['pt'][] = 'Gest??o de p??ginas';
        $this->messages['pt'][] = 'Buscar p??ginas';
        $this->messages['pt'][] = 'Gest??o de not??cias';
        $this->messages['pt'][] = 'Listar not??cias';
        $this->messages['pt'][] = 'Propriedades';
        //fim
        
        $this->messages['es'] = [];
        $this->messages['es'][] = 'Archivo no encontrado';
        $this->messages['es'][] = 'Buscar';
        $this->messages['es'][] = 'Registrar';
        $this->messages['es'][] = 'Registro guardado';
        $this->messages['es'][] = 'Deseas realmente eliminar ?';
        $this->messages['es'][] = 'Registro eliminado';
        $this->messages['es'][] = 'Funci??n';
        $this->messages['es'][] = 'Tabla';
        $this->messages['es'][] = 'Herramienta';
        $this->messages['es'][] = 'Datos';
        $this->messages['es'][] = 'Abrir';
        $this->messages['es'][] = 'Nuevo';
        $this->messages['es'][] = 'Guardar';
        $this->messages['es'][] = 'Buscar';
        $this->messages['es'][] = 'Modificar';
        $this->messages['es'][] = 'Eliminar';
        $this->messages['es'][] = 'Cancelar';
        $this->messages['es'][] = 'S??';
        $this->messages['es'][] = 'No';
        $this->messages['es'][] = 'Enero';
        $this->messages['es'][] = 'Febrero';
        $this->messages['es'][] = 'Marzo';
        $this->messages['es'][] = 'Abril';
        $this->messages['es'][] = 'Mayo';
        $this->messages['es'][] = 'Junio';
        $this->messages['es'][] = 'Julio';
        $this->messages['es'][] = 'Agosto';
        $this->messages['es'][] = 'Septiembre';
        $this->messages['es'][] = 'Octubre';
        $this->messages['es'][] = 'Noviembre';
        $this->messages['es'][] = 'Diciembre';
        $this->messages['es'][] = 'Hoy';
        $this->messages['es'][] = 'Cerrar';
        $this->messages['es'][] = 'El campo ^1 no puede tener menos de ^2 caracteres';
        $this->messages['es'][] = 'El campo ^1 no puede tener mas de ^2 caracteres';
        $this->messages['es'][] = 'El campo ^1 no puede ser menor que ^2';
        $this->messages['es'][] = 'El campo ^1 no puede ser mayor que ^2';
        $this->messages['es'][] = 'El campo ^1 es obligatorio';
        $this->messages['es'][] = 'El campo ^1 no contiene un CNPJ v??lido';
        $this->messages['es'][] = 'El campo ^1 no contiene un CPF v??lido';
        $this->messages['es'][] = 'El campo ^1 contiene um e-mail inv??lido';
        $this->messages['es'][] = 'Permiso denegado';
        $this->messages['es'][] = 'Generar';
        $this->messages['es'][] = 'Listar';
        $this->messages['es'][] = 'Contrase??a incorrecta';
        $this->messages['es'][] = 'Usu??rio no encontrado';
        $this->messages['es'][] = 'Usu??rio';
        $this->messages['es'][] = 'Usu??rios';
        $this->messages['es'][] = 'Contrase??a';
        $this->messages['es'][] = 'Login';
        $this->messages['es'][] = 'Nombre';
        $this->messages['es'][] = 'Grupo';
        $this->messages['es'][] = 'Grupos';
        $this->messages['es'][] = 'Programa';
        $this->messages['es'][] = 'Programas';
        $this->messages['es'][] = 'Volver al listado';
        $this->messages['es'][] = 'Classe de control';
        $this->messages['es'][] = 'Email';
        $this->messages['es'][] = 'Registro actualizado';
        $this->messages['es'][] = 'Confirme contrase??a';
        $this->messages['es'][] = 'Pantalla inicial';
        $this->messages['es'][] = 'Nombre da la Pantalla';
        $this->messages['es'][] = 'Las contrase??as no conciden';
        $this->messages['es'][] = 'Ingresar';
        $this->messages['es'][] = 'Fecha';
        $this->messages['es'][] = 'Columna';
        $this->messages['es'][] = 'Operaci??n';
        $this->messages['es'][] = 'Valor anterior';
        $this->messages['es'][] = 'Valor nuevo';
        $this->messages['es'][] = 'Base de datos';
        $this->messages['es'][] = 'Perfil';
        $this->messages['es'][] = 'Cambiar contrase??a';
        $this->messages['es'][] = 'Deje vacio para mantener la contrase??a anterior';
        $this->messages['es'][] = 'Resultados';
        $this->messages['es'][] = 'Comando inv??lido';
        $this->messages['es'][] = '^1 registros  exhibidos';
        $this->messages['es'][] = 'Administraci??n';
        $this->messages['es'][] = 'Panel SQL';
        $this->messages['es'][] = 'Log de acceso';
        $this->messages['es'][] = 'Log de modificaciones';
        $this->messages['es'][] = 'Log de SQL';
        $this->messages['es'][] = 'Limpiar formul??rio';
        $this->messages['es'][] = 'Enviar';
        $this->messages['es'][] = 'Mensaje';
        $this->messages['es'][] = 'Mensajes';
        $this->messages['es'][] = 'Asunto';
        $this->messages['es'][] = 'Mensaje enviada exitosamente';
        $this->messages['es'][] = 'Marcar como le??da';
        $this->messages['es'][] = 'Marcar como no le??da';
        $this->messages['es'][] = 'Acci??n';
        $this->messages['es'][] = 'Leer';
        $this->messages['es'][] = 'Origen';
        $this->messages['es'][] = 'Verificado';
        $this->messages['es'][] = 'Objeto ^1 no encontrado en ^2';
        $this->messages['es'][] = 'Notificaci??n';
        $this->messages['es'][] = 'Notificaciones';
        $this->messages['es'][] = 'Categorias';
        $this->messages['es'][] = 'Enviar documentos';
        $this->messages['es'][] = 'Mis documentos';
        $this->messages['es'][] = 'Compartidos conmigo';
        $this->messages['es'][] = 'Documento';
        $this->messages['es'][] = 'Archivo';
        $this->messages['es'][] = 'T??tulo';
        $this->messages['es'][] = 'Descripci??n';
        $this->messages['es'][] = 'Categoria';
        $this->messages['es'][] = 'Fecha de envio';
        $this->messages['es'][] = 'Fecha de archivamiento';
        $this->messages['es'][] = 'Upload';
        $this->messages['es'][] = 'Download';
        $this->messages['es'][] = 'Siguiente';
        $this->messages['es'][] = 'Documentos';
        $this->messages['es'][] = 'Permiso';
        $this->messages['es'][] = 'Unidad';
        $this->messages['es'][] = 'Unidades';
        $this->messages['es'][] = 'Agrega';
        $this->messages['es'][] = 'Activo';
        $this->messages['es'][] = 'Activar/desactivar';
        $this->messages['es'][] = 'Usu??rio desactivado';
        $this->messages['es'][] = 'Envia mensaje';
        $this->messages['es'][] = 'Leer mensaje';
        $this->messages['es'][] = 'Un usu??rio ya est?? registrado con este login';
        $this->messages['es'][] = 'Estadisticas de acceso';
        $this->messages['es'][] = 'Accesos';
        $this->messages['es'][] = 'Preferencias';
        $this->messages['es'][] = 'E-mail de origen';
        $this->messages['es'][] = 'Autentica SMTP';
        $this->messages['es'][] = 'Host SMTP';
        $this->messages['es'][] = 'Puerta SMTP';
        $this->messages['es'][] = 'Usu??rio SMTP';
        $this->messages['es'][] = 'Contrase??a SMTP';
        $this->messages['es'][] = 'Ticket';
        $this->messages['es'][] = 'Abrir ticket';
        $this->messages['es'][] = 'Email de soporte';
        $this->messages['es'][] = 'Dia';
        $this->messages['es'][] = 'Carpetas';
        $this->messages['es'][] = 'Componer';
        $this->messages['es'][] = 'Entrada';
        $this->messages['es'][] = 'Enviados';
        $this->messages['es'][] = 'Archivados';
        $this->messages['es'][] = 'Archivar';
        $this->messages['es'][] = 'Recuperar';
        $this->messages['es'][] = 'Valor';
        $this->messages['es'][] = 'Ver todos';
        $this->messages['es'][] = 'Recargar';
        $this->messages['es'][] = 'Volver';
        $this->messages['es'][] = 'Limpiar';
        $this->messages['es'][] = 'Visualizar';
        $this->messages['es'][] = 'Ningun registro fue encontrado';
        $this->messages['es'][] = 'Dise??o generado con ??xito';
        $this->messages['es'][] = 'QR codes generados con ??xito';
        $this->messages['es'][] = 'C??digos de barra generados con ??xito';
        $this->messages['es'][] = 'Documento generado con ??xito';
        $this->messages['es'][] = 'Valor';
        $this->messages['es'][] = 'Usu??rio';
        $this->messages['es'][] = 'Contrase??a';
        $this->messages['es'][] = 'Puerta';
        $this->messages['es'][] = 'Tipo de base de datos';
        $this->messages['es'][] = 'Usu??rio admin';
        $this->messages['es'][] = 'Contrase??a del usu??rio admin';
        $this->messages['es'][] = 'Crear base de datos/usu??rio';
        $this->messages['es'][] = 'Testear conexi??n';
        $this->messages['es'][] = 'Nombree de la base de datos';
        $this->messages['es'][] = 'Ingresar permisos/programas';
        $this->messages['es'][] = 'Base de datos y usu??rio creado con ??xito';
        $this->messages['es'][] = 'Permisos y programas agregados con ??xito';
        $this->messages['es'][] = 'Actualizar configuraci??n';
        $this->messages['es'][] = 'Archivo de configuraci??n: ^1 actualizado con ??xito';
        $this->messages['es'][] = 'Conexi??n realizada con ??xito';
        $this->messages['es'][] = 'La base de datos ^1 no existe';
        $this->messages['es'][] = 'Permisos/programas agregados con ??xito';
        $this->messages['es'][] = 'Los programas/permisos ya fueron agregados';
        $this->messages['es'][] = 'Instalando en su aplicaci??n';
        $this->messages['es'][] = 'Verficaci??n de la version del PHP y extenciones instaladas';
        $this->messages['es'][] = 'Verficaci??n del PHP';
        $this->messages['es'][] = 'Verficaci??n de directorios y archivos';
        $this->messages['es'][] = 'Configuraci??n/creaci??n de la base de datos';
        $this->messages['es'][] = 'Usu??rio admin';
        $this->messages['es'][] = 'Contrase??a del usu??rio admin';
        $this->messages['es'][] = 'Ingresar datos';
        $this->messages['es'][] = 'De la base de datos:';
        $this->messages['es'][] = 'La conexi??n con la base de datos ^1 fall??';
        $this->messages['es'][] = 'Instalar';
        $this->messages['es'][] = 'Bases de datos instaladas con ??xito';
        $this->messages['es'][] = 'Las bases de datos ya fueron instaladas';
        $this->messages['es'][] = 'Unidad principal';
        $this->messages['es'][] = 'Hora';
        $this->messages['es'][] = 'Tipo';
        $this->messages['es'][] = 'Falla al leer el log de errores (^1)';
        $this->messages['es'][] = 'El log de errores (^1) no permite escritura por el usu??rio web, as?? que los mensajes deben estar incompletos';
        $this->messages['es'][] = 'Revise el propietario del archivo de log. Debe ser igual al usu??rio web (generalmente www-data, www, etc)';
        $this->messages['es'][] = 'Log de errores est?? vacio o no fue configurado correctamente. Defina el archivo de log de errores, configurando <b>error_log</b> en el php.ini';
        $this->messages['es'][] = 'Errores no estan siendo registrados. Por favor, modifique <b>log_errors = On</b> en el php.ini';
        $this->messages['es'][] = 'Errores no estan actualmente siendo mostrados porque <b>display_errors</b> est?? configurado para Off en el php.ini';
        $this->messages['es'][] = 'Esta configuraci??n normalmente es recomendada para producci??n, no para el prop??sito de desarrollo';
        $this->messages['es'][] = 'La ubicaci??n actual del php.ini es <b>^1</b>';
        $this->messages['es'][] = 'La ubicaci??n actual del log de errores es <b>^1</b>';
        $this->messages['es'][] = 'Log del PHP';
        $this->messages['es'][] = 'Database explorer';
        $this->messages['es'][] = 'Tablas';
        $this->messages['es'][] = 'Reporte generado. Favor, habilitar los popups';
        $this->messages['es'][] = 'Archivo guardado';
        $this->messages['es'][] = 'Modificar p??gina';
        $this->messages['es'][] = 'Actualizar p??gina';
        $this->messages['es'][] = 'M??dulo';
        $this->messages['es'][] = 'Direct??rio';
        $this->messages['es'][] = 'C??digo-fuente';
        $this->messages['es'][] = 'Retorno inv??lido';
        $this->messages['es'][] = 'P??gina';
        $this->messages['es'][] = 'Fallas en la conexi??n';
        $this->messages['es'][] = 'Resumen de la instalaci??n de la base de datos';
        $this->messages['es'][] = 'Sin permiso de escritura en el archivo';
        $this->messages['es'][] = 'Para que sea posible continuar con la instalaci??n usted debe conceder permisos de lectura para el direct??rio';
        $this->messages['es'][] = 'Para que sea posible continuar con la instalaci??n usted debe conceder permisos de escritura para el direct??rio';
        $this->messages['es'][] = 'Instalada';
        $this->messages['es'][] = 'Direct??rio';
        $this->messages['es'][] = 'Archivo';
        $this->messages['es'][] = 'Escritura';
        $this->messages['es'][] = 'Lectura';
        $this->messages['es'][] = 'Para que sea posible continuar con la instalaci??n usted debe conceder permisos de lectura para el archivo';
        $this->messages['es'][] = 'Para que sea posible continuar con la instalaci??n usted debe conceder permisos de escritura para el archivo';
        $this->messages['es'][] = 'Foto';
        $this->messages['es'][] = 'Cambiar contrase??a';
        $this->messages['es'][] = 'Una nueva seed es necesaria en application.ini por motivos de seguridad';
        $this->messages['es'][] = 'Cambiar la contrase??a';
        $this->messages['es'][] = 'Token expirado. Esta operaci??n no est?? permitida';
        $this->messages['es'][] = 'La contrase??a fue modificada';
        $this->messages['es'][] = 'Un usu??rio ya est?? registrado con este e-mail';
        $this->messages['es'][] = 'Credenciales LDAP incorrectas';
        $this->messages['es'][] = 'Actualizar el menu reemplazando el archivo existente?';
        $this->messages['es'][] = 'Menu actualizado con ??xito';
        $this->messages['es'][] = 'Direcci??n del menu';
        $this->messages['es'][] = 'Agregar al menu';
        $this->messages['es'][] = 'Eliminar del menu';
        $this->messages['es'][] = 'Iten eliminado del menu';
        $this->messages['es'][] = 'Iten agregado al menu';
        $this->messages['es'][] = '??cono';
        $this->messages['es'][] = 'Registro de usu??rio';
        $this->messages['es'][] = 'El registro de usu??rios est?? desactivado';
        $this->messages['es'][] = 'La recuperaci??n de contrase??a est?? desactivada';
        $this->messages['es'][] = 'Cuenta creada';
        $this->messages['es'][] = 'Crear cuenta';
        $this->messages['es'][] = 'Si desea reinstalar, edite el archivo app/config/install.ini y cambie installed = 1 a installed = 0. Borre el contenido en el archivo app/config/install.ini tambi??n';
        $this->messages['es'][] = 'Error de autorizaci??n';
        $this->messages['es'][] = 'Salir';
        $this->messages['es'][] = 'Clave REST no definida';
        $this->messages['es'][] = 'Local';
        $this->messages['es'][] = 'Remoto';
        $this->messages['es'][] = '??xito';
        $this->messages['es'][] = 'Error';
        $this->messages['es'][] = 'Estado';
        $this->messages['es'][] = 'Actualizar permisos?';
        $this->messages['es'][] = 'Cambiado';
        $this->messages['es'][] = 'Agregar elemento arriba';
        $this->messages['es'][] = 'Agregar elemento abajo';
        $this->messages['es'][] = 'Adiciona item hijo';
        $this->messages['es'][] = 'Excluir item';
        $this->messages['es'][] = 'Mover elemento';
        $this->messages['es'][] = 'Editor de men??';
        $this->messages['es'][] = 'Ordenaci??n';
        $this->messages['es'][] = 'Etiqueta';
        $this->messages['es'][] = 'Color';
        $this->messages['es'][] = 'Men?? guardado';
        $this->messages['es'][] = 'Clonar';
        $this->messages['es'][] = 'Personificar';
        $this->messages['es'][] = 'Personificado';
        $this->messages['es'][] = 'Rastreo de ejecuci??n';
        $this->messages['es'][] = 'Sesi??n';
        $this->messages['es'][] = 'Log de request';
        $this->messages['es'][] = 'M??todo';
        $this->messages['es'][] = 'Request';
        $this->messages['es'][] = 'Usuarios por grupo';
        $this->messages['es'][] = 'Cantidad';
        $this->messages['es'][] = 'Usuarios por unidad';
        $this->messages['es'][] = 'Guardar como PDF';
        $this->messages['es'][] = 'Guardar como CSV';
        $this->messages['es'][] = 'Guardar como XML';
        $this->messages['es'][] = 'Exportar';
        $this->messages['es'][] = 'Informaciones del sistema';
        $this->messages['es'][] = 'Mem??ria RAM';
        $this->messages['es'][] = 'Utilizando/Total';
        $this->messages['es'][] = 'Disponible';
        $this->messages['es'][] = 'Porcentaje utilizado';
        $this->messages['es'][] = 'Uso de CPU';
        $this->messages['es'][] = 'Proveedor';
        $this->messages['es'][] = 'Modelo';
        $this->messages['es'][] = 'Frecuencia actual';
        $this->messages['es'][] = 'Servidor web y procesos';
        $this->messages['es'][] = 'Dispositivos de disco';
        $this->messages['es'][] = 'Dispositivo';
        $this->messages['es'][] = 'Punto de montaje';
        $this->messages['es'][] = 'Sistema de archivos';
        $this->messages['es'][] = 'Dispositivos de red';
        $this->messages['es'][] = 'Nombre del dispositivo';
        $this->messages['es'][] = 'Velocidad de la puerta';
        $this->messages['es'][] = 'Enviados';
        $this->messages['es'][] = 'Recebidos';
        $this->messages['es'][] = 'Imprimir';
        $this->messages['es'][] = 'Eliminar variable de sesi??n';
        $this->messages['es'][] = 'Personificado por';
        $this->messages['es'][] = 'Acceso prohibido a esta unidad';
        $this->messages['es'][] = 'Diferencia de archivo';
        $this->messages['es'][] = 'Remoto';
        $this->messages['es'][] = 'Igual';
        $this->messages['es'][] = 'Cambiado';
        $this->messages['es'][] = 'T??rminos de uso y pol??tica de privacidad';
        $this->messages['es'][] = 'Aceptar';
        $this->messages['es'][] = 'He le??do y acepto los t??rminos de uso y la pol??tica de privacidad';
        $this->messages['es'][] = 'Necesita leer y aceptar los t??rminos de uso y la pol??tica de privacidad';
        $this->messages['es'][] = 'Ingrese a su cuenta';
        $this->messages['es'][] = 'Acaba de iniciar sesi??n correctamente en ^1. Si no reconoce este inicio de sesi??n, comun??quese con el soporte t??cnico';

        // 7.5
        $this->messages['es'][] = 'Haga clic aqu?? para m??s informaci??n';
        $this->messages['es'][] = 'Ya has registrado esta contrase??a';
        $this->messages['es'][] = 'Renovaci??n de contrase??a';
        $this->messages['es'][] = 'Debe renovar su contrase??a, ya que hemos identificado que no la ha cambiado durante m??s de ^1 d??as';
        $this->messages['es'][] = 'Debe renovar su contrase??a, ya que hemos identificado que no la ha cambiado durante m??s de ^1 d??as';
        $this->messages['es'][] = 'Buscar global';
        $this->messages['es'][] = 'M??s';
        $this->messages['es'][] = 'Subir archivo';
        $this->messages['es'][] = 'Nueva carpeta';
        $this->messages['es'][] = 'Carpeta';
        $this->messages['es'][] = 'Esta operaci??n no est?? permitida';
        $this->messages['es'][] = 'Carpeta principal';
        $this->messages['es'][] = 'Enviado a fuera';
        $this->messages['es'][] = 'Enviado a la basura';
        $this->messages['es'][] = 'Enviado a ^1';
        $this->messages['es'][] = 'Definido como favorito';
        $this->messages['es'][] = 'Favoritos';
        $this->messages['es'][] = 'Basura';
        $this->messages['es'][] = 'Enviar a la basura';
        $this->messages['es'][] = 'Marcar como favorito';
        $this->messages['es'][] = 'Remover dos favoritos';
        $this->messages['es'][] = 'Remover da basura';
        $this->messages['es'][] = 'Restaurado';
        $this->messages['es'][] = 'Cuota';
        $this->messages['es'][] = 'Detalles';
        $this->messages['es'][] = 'Remover permanentemente';
        $this->messages['es'][] = 'Esto eliminar?? todo el contenido de la carpeta.';
        $this->messages['es'][] = 'Creado el';
        $this->messages['es'][] = 'Actualizado el';
        $this->messages['es'][] = 'Tener publicaciones con esta etiqueta, por favor inactivo';
        $this->messages['es'][] = 'Publicacion';
        $this->messages['es'][] = 'Publicaciones';
        $this->messages['es'][] = 'Criado por';
        $this->messages['es'][] = 'asta';
        $this->messages['es'][] = 'Contenido';
        $this->messages['es'][] = 'Avance';
        $this->messages['es'][] = 'Noticias';
        $this->messages['es'][] = 'Gusto';
        $this->messages['es'][] = 'Comentar';
        $this->messages['es'][] = 'Comentarios';
        $this->messages['es'][] = 'Gustos';
        $this->messages['es'][] = 'Ver m??s';
        $this->messages['es'][] = 'Tel??fono';
        $this->messages['es'][] = 'Direcci??n';
        $this->messages['es'][] = 'Funci??n';
        $this->messages['es'][] = 'Sobre';
        $this->messages['es'][] = 'Expandir';
        $this->messages['es'][] = 'Contactos';
        $this->messages['es'][] = 'Llamada';
        $this->messages['es'][] = 'Buscable';
        $this->messages['es'][] = 'A??adir enlace wiki';
        $this->messages['es'][] = '??ltima modifici??n';
        $this->messages['es'][] = 'gesti??n de p??ginas';
        $this->messages['es'][] = 'buscar p??ginas';
        $this->messages['es'][] = 'Propiedades';
        //fim
        foreach ($this->messages as $lang => $messages)
        {
            $this->sourceMessages[$lang] = array_flip( $this->messages[ $lang ] );
        }
    }
    
    /**
     * Returns the singleton instance
     * @return  Instance of self
     */
    public static function getInstance()
    {
        // if there's no instance
        if (empty(self::$instance))
        {
            // creates a new object
            self::$instance = new self;
        }
        // returns the created instance
        return self::$instance;
    }
    
    /**
     * Define the target language
     * @param $lang     Target language index
     */
    public static function setLanguage($lang, $global = true)
    {
        $instance = self::getInstance();
        if (in_array($lang, array_keys($instance->messages)))
        {
            $instance->lang = $lang;
        }
        
        if ($global)
        {
            AdiantiCoreTranslator::setLanguage( $lang );
        }
    }
    
    /**
     * Returns the target language
     * @return Target language index
     */
    public static function getLanguage()
    {
        $instance = self::getInstance();
        return $instance->lang;
    }
    
    /**
     * Translate a word to the target language
     * @param $word     Word to be translated
     * @return          Translated word
     */
    public static function translate($word, $source_language, $param1 = NULL, $param2 = NULL, $param3 = NULL)
    {
        // get the self unique instance
        $instance = self::getInstance();
        // search by the numeric index of the word
        
        if (isset($instance->sourceMessages[$source_language][$word]) and !is_null($instance->sourceMessages[$source_language][$word]))
        {
            $key = $instance->sourceMessages[$source_language][$word]; //$key = array_search($word, $instance->messages['en']);
            
            // get the target language
            $language = self::getLanguage();
            // returns the translated word
            $message = $instance->messages[$language][$key];
            
            if (isset($param1))
            {
                $message = str_replace('^1', $param1, $message);
            }
            if (isset($param2))
            {
                $message = str_replace('^2', $param2, $message);
            }
            if (isset($param3))
            {
                $message = str_replace('^3', $param3, $message);
            }
            return $message;
        }
        else
        {
            return 'Message not found: '. $word;
        }
    }
    
    /**
     * Translate a template file
     */
    public static function translateTemplate($template)
    {
        // search by translated words
        if(preg_match_all( '!_t\{(.*?)\}!i', $template, $match ) > 0)
        {
            foreach($match[1] as $word)
            {
                $translated = _t($word);
                $template = str_replace('_t{'.$word.'}', $translated, $template);
            }
        }
        
        if(preg_match_all( '!_tf\{(.*?), (.*?)\}!i', $template, $matches ) > 0)
        {
            foreach($matches[0] as $key => $match)
            {
                $raw        = $matches[0][$key];
                $word       = $matches[1][$key];
                $from       = $matches[2][$key];
                $translated = _tf($word, $from);
                $template = str_replace($raw, $translated, $template);
            }
        }
        return $template;
    }
}

/**
 * Facade to translate words from english
 * @param $word  Word to be translated
 * @param $param1 optional ^1
 * @param $param2 optional ^2
 * @param $param3 optional ^3
 * @return Translated word
 */
function _t($msg, $param1 = null, $param2 = null, $param3 = null)
{
    return ApplicationTranslator::translate($msg, 'en', $param1, $param2, $param3);
}

/**
 * Facade to translate words from specified language
 * @param $word  Word to be translated
 * @param $source_language  Source language
 * @param $param1 optional ^1
 * @param $param2 optional ^2
 * @param $param3 optional ^3
 * @return Translated word
 */
function _tf($msg, $source_language = 'en', $param1 = null, $param2 = null, $param3 = null)
{
    return ApplicationTranslator::translate($msg, $source_language, $param1, $param2, $param3);
}
