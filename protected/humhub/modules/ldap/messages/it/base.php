<?php
return array (
  'A TLS/SSL is strongly favored in production environments to prevent passwords from be transmitted in clear text.' => 'TLS/SSL è fortemente richiesto in ambienti di produzione per prevenire la trasmissione di password con testo in chiaro.',
  'Base DN' => 'DN base',
  'Defines the filter to apply, when login is attempted. %s replaces the username in the login action. Example: &quot;(sAMAccountName=%s)&quot; or &quot;(uid=%s)&quot;' => 'Definisce il filtro da applicare quando si tenta di accedere. Sostituisce %s al nome utente nell\'azione di accesso. Esempio: "(sAMAccountName=%s)" o "(uid=%s)"',
  'E-Mail Address Attribute' => 'Attributo indirizzo E-mail',
  'Enable LDAP Support' => 'Abilita supporto LDAP',
  'Encryption' => 'Crittografia',
  'Fetch/Update Users Automatically' => 'Controlla/aggiorna utenti automaticamente',
  'Hostname' => 'Hostname',
  'ID Attribute' => 'Attributo ID',
  'LDAP' => 'LDAP',
  'LDAP Attribute for E-Mail Address. Default: &quot;mail&quot;' => 'Attributo LDAP per indirizzo e-mail. Default: "mail"',
  'LDAP Attribute for Username. Example: &quot;uid&quot; or &quot;sAMAccountName&quot;' => 'Attributo LDAP per nome utente. Esempio:"uid" or "sAMAccountName"',
  'Limit access to users meeting this criteria. Example: &quot;(objectClass=posixAccount)&quot; or &quot;(&(objectClass=person)(memberOf=CN=Workers,CN=Users,DC=myDomain,DC=com))&quot;' => 'Limitare l\'accesso agli utenti che soddisfano questi criteri. Esempio: "(objectClass=posixAccount)" or "(&amp;(objectClass=person)(memberOf=CN=Workers,CN=Users,DC=myDomain,DC=com))"',
  'Login Filter' => 'Filtro login',
  'Not changeable LDAP attribute to unambiguously identify the user in the directory. If empty the user will be determined automatically by e-mail address or username. Examples: objectguid (ActiveDirectory) or uidNumber (OpenLDAP)' => 'Attributo LDAP non modificabile che identifica in modo univoco l\'utente nella directory. Se lasciato vuoto, l\'utente verrà determinato dall\'indirizzo e-mail o dal nome utente. Esempi: objectguid (ActiveDirectory) o uidNumber (OpenLDAP)',
  'Password' => 'Password',
  'Port' => 'Porta',
  'Specify your LDAP-backend used to fetch user accounts.' => 'Specifica il tuo backend LDAP per recuperare gli account utenti',
  'Status: Error! (Message: {message})' => 'Stato: Errore! (Messaggio: {message})',
  'Status: OK! ({userCount} Users)' => 'Stato: OK! ({userCount} Utenti)',
  'Status: Warning! (No users found using the ldap user filter!)' => 'Attenzione! Non trovo utenti usando il filtro impostato!',
  'The default base DN used for searching for accounts.' => 'La base DN predefinita usata per cercare gli account.',
  'The default credentials password (used only with username above).' => 'Password predefinita (usata solo con lo username qui sopra).',
  'The default credentials username. Some servers require that this be in DN form. This must be given in DN form if the LDAP server requires a DN to bind and binding should be possible with simple usernames.' => 'Username credenziale predefinito. Alcuni server richiedono che questo sia nella forma DN. Questo deve essere fornito nella forma DN se il server LDAP richiede un DN per vincolare e il vincolamento dovrebbe essere possible con semplici nomi utente.',
  'User Filter' => 'Filtro utente',
  'Username' => 'Username',
  'Username Attribute' => 'Attributo Username',
);
