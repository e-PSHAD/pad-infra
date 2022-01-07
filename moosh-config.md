Paramètres de configuration Moodle via Moosh
============================================

Le nom d'un paramètre est visible par exemple dans l'interface d'administration :
![](./exemple_config_enableglobalsearch.png)

Pour connaître la valeur et le type de valeur acceptés par un paramètre, il est utile d'utiliser `moosh config-get <nom_du_plugin> <nom_du_parametre>` :

```
$ moosh config-get core enableglobalsearch
0
```
Par exemple, un booléen est généralement représenté par les valeurs 0 ou 1. Il est vivement recommandé de **tester la commande** avec le paramètre et la valeur en local (environnement Docker) et de **vérifier son effet** avant de l'insérer dans le fichier de configuration `pad_config_var.yml`.

Quand un paramètre est spécifique à un plugin, le nom du plugin apparaît devant le paramètre. Exemple ci-dessous du paramètre `autosavefrequency` pour le plugin `editor_atto` :

![](./exemple_config_editoratto.png)

En interrogeant la valeur stockée, on voit que l'unité de celle-ci est visiblement la seconde (60s = 1 minute) :

```
$ moosh config-get editor_atto autosavefrequency
60
```

NB: il existe d'autres commandes plus spécialisées pour certaines données, comme `cache-config-set`, `course-config-set`, ... Voir la [liste des commandes Moosh](https://moosh-online.com/commands/).

## Format du fichier `pad_config_var.yml`

Quand un paramètre appartient au plugin `core`, il n'est pas nécessaire de préciser ceci dans le fichier `pad_config_var.yml`. Sinon il faut rajouter l'entrée `plugin` :

```yaml
config: # ne pas changer le nom 'config'!
  -
    key: timezone
    value: Europe/Paris
  -
    key: enableglobalsearch
    value: 1
  -
    key: autosavefrequency
    value: 60 # in seconds
    plugin: editor_atto
```

## Liste des paramètres `core`

Cette liste a été obtenue avec la commande `moosh config-get` dans une instance **Moodle 3.11.4**. Il s'agit par défaut des paramètres du plugin `core`. En conséquence la liste est **non exhaustive** car elle n'inclut pas les paramètres de tous les plugins.

```
rolesactive
auth
enrol_plugins_enabled
theme
filter_multilang_converted
siteidentifier
backup_version
backup_release
mnet_dispatcher_mode
sessiontimeout
stringfilters
filterall
texteditors
antiviruses
media_plugins_sortorder
upgrade_extracreditweightsstepignored
upgrade_calculatedgradeitemsignored
upgrade_letterboundarycourses
mnet_localhost_id
mnet_all_hosts_id
siteguest
siteadmins
themerev
jsrev
templaterev
gdversion
licenses
sitedefaultlicense
version
enableuserfeedback
userfeedback_nextreminder
userfeedback_remindafter
enableoutcomes
usecomments
usetags
enablenotes
enableportfolios
enablewebservices
enablestats
enablerssfeeds
enableblogs
enablecompletion
completiondefault
enableavailability
enableplagiarism
enablebadges
enableglobalsearch
allowstealth
enableanalytics
allowemojipicker
userfiltersdefault
defaultpreference_maildisplay
defaultpreference_mailformat
defaultpreference_maildigest
defaultpreference_autosubscribe
defaultpreference_trackforums
defaultpreference_core_contentbank_visibility
autologinguests
hiddenuserfields
showuseridentity
fullnamedisplay
alternativefullnameformat
maxusersperpage
enablegravatar
gravatardefaulturl
agedigitalconsentverification
agedigitalconsentmap
sitepolicy
sitepolicyguest
downloadcoursecontentallowed
maxsizeperdownloadcoursefile
enablecourserequests
defaultrequestcategory
lockrequestcategory
courserequestnotify
activitychoosertabmode
activitychooseractivefooter
enableasyncbackup
grade_profilereport
grade_aggregationposition
grade_includescalesinaggregation
grade_hiddenasdate
gradepublishing
grade_export_exportfeedback
grade_export_displaytype
grade_export_decimalpoints
grade_navmethod
grade_export_userprofilefields
grade_export_customprofilefields
recovergradesdefault
gradeexport
unlimitedgrades
grade_report_showmin
gradepointmax
gradepointdefault
grade_minmaxtouse
grade_mygrades_report
gradereport_mygradeurl
grade_hideforcedsettings
grade_aggregation
grade_aggregation_flag
grade_aggregations_visible
grade_aggregateonlygraded
grade_aggregateonlygraded_flag
grade_aggregateoutcomes
grade_aggregateoutcomes_flag
grade_keephigh
grade_keephigh_flag
grade_droplow
grade_droplow_flag
grade_overridecat
grade_displaytype
grade_decimalpoints
grade_item_advanced
grade_report_studentsperpage
grade_report_showonlyactiveenrol
grade_report_quickgrading
grade_report_showquickfeedback
grade_report_meanselection
grade_report_enableajax
grade_report_showcalculations
grade_report_showeyecons
grade_report_showaverages
grade_report_showlocks
grade_report_showranges
grade_report_showanalysisicon
grade_report_showuserimage
grade_report_showactivityicons
grade_report_shownumberofgrades
grade_report_averagesdisplaytype
grade_report_rangesdisplaytype
grade_report_averagesdecimalpoints
grade_report_rangesdecimalpoints
grade_report_historyperpage
grade_report_overview_showrank
grade_report_overview_showtotalsifcontainhidden
grade_report_user_showrank
grade_report_user_showpercentage
grade_report_user_showgrade
grade_report_user_showfeedback
grade_report_user_showrange
grade_report_user_showweight
grade_report_user_showaverage
grade_report_user_showlettergrade
grade_report_user_rangedecimals
grade_report_user_showhiddenitems
grade_report_user_showtotalsifcontainhidden
grade_report_user_showcontributiontocoursetotal
badges_defaultissuername
badges_defaultissuercontact
badges_badgesalt
badges_allowcoursebadges
badges_allowexternalbackpack
rememberuserlicensepref
forcetimezone
country
defaultcity
geoip2file
googlemapkey3
allcountrycodes
autolang
lang
autolangusercreation
langmenu
langlist
langrev
langcache
langstringcache
locale
latinexcelexport
messaging
messagingallusers
messagingdefaultpressenter
messagingdeletereadnotificationsdelay
messagingdeleteallnotificationsdelay
messagingallowemailoverride
requiremodintro
authloginviaemail
allowaccountssameemail
authpreventaccountcreation
loginpageautofocus
guestloginbutton
limitconcurrentlogins
alternateloginurl
forgottenpasswordurl
auth_instructions
allowemailaddresses
denyemailaddresses
verifychangedemail
recaptchapublickey
recaptchaprivatekey
filteruploadedfiles
filtermatchoneperpage
filtermatchonepertext
media_default_width
media_default_height
portfolio_moderate_filesize_threshold
portfolio_high_filesize_threshold
portfolio_moderate_db_threshold
portfolio_high_db_threshold
repositorycacheexpire
repositorygetfiletimeout
repositorysyncfiletimeout
repositorysyncimagetimeout
repositoryallowexternallinks
legacyfilesinnewcourses
legacyfilesaddallowed
searchengine
searchindexwhendisabled
searchindextime
searchallavailablecourses
searchincludeallcourses
searchenablecategories
searchdefaultcategory
searchhideallcategory
searchenginequeryonly
searchbannerenable
searchbanner
allowbeforeblock
allowedip
blockedip
protectusernames
forcelogin
forceloginforprofiles
forceloginforprofileimage
opentowebcrawlers
allowindexing
maxbytes
userquota
allowobjectembed
enabletrusttext
maxeditingtime
extendedusernamechars
keeptagnamecase
profilesforenrolledusersonly
cronclionly
cronremotepassword
lockoutthreshold
lockoutwindow
lockoutduration
passwordpolicy
minpasswordlength
minpassworddigits
minpasswordlower
minpasswordupper
minpasswordnonalphanum
maxconsecutiveidentchars
passwordpolicycheckonlogin
passwordreuselimit
pwresettime
passwordchangelogout
passwordchangetokendeletion
tokenduration
groupenrolmentkeypolicy
disableuserimages
emailchangeconfirmation
rememberusername
strictformsrequired
cookiesecure
cookiehttponly
allowframembedding
curlsecurityblockedhosts
curlsecurityallowedport
referrerpolicy
displayloginfailures
notifyloginfailures
notifyloginthreshold
themelist
themedesignermode
allowuserthemes
allowcoursethemes
allowcategorythemes
allowcohortthemes
allowthemechangeonurl
allowuserblockhiding
langmenuinsecurelayout
logininfoinsecurelayout
custommenuitems
customusermenuitems
enabledevicedetection
devicedetectregex
calendartype
calendar_adminseesall
calendar_site_timeformat
calendar_startwday
calendar_weekend
calendar_lookahead
calendar_maxevents
enablecalendarexport
calendar_customexport
calendar_exportlookahead
calendar_exportlookback
calendar_exportsalt
calendar_showicalsource
useblogassociations
bloglevel
useexternalblogs
externalblogcrontime
maxexternalblogsperuser
blogusecomments
blogshowcommentscount
defaulthomepage
allowguestmymoodle
navshowfullcoursenames
navshowcategories
navshowmycoursecategories
navshowallcourses
navsortmycoursessort
navsortmycourseshiddenlast
navcourselimit
usesitenameforsitepages
linkadmincategories
linkcoursesections
navshowfrontpagemods
navadduserpostslinks
formatstringstriptags
emoticons
docroot
doclang
doctonewwindow
coursecontactduplicates
courselistshortnames
coursesperpage
courseswithsummarieslimit
courseoverviewfileslimit
courseoverviewfilesext
coursegraceperiodbefore
coursegraceperiodafter
useexternalyui
yuicomboloading
cachejs
additionalhtmlhead
additionalhtmltopofbody
additionalhtmlfooter
cachetemplates
pathtophp
pathtodu
aspellpath
pathtodot
pathtogs
pathtopdftoppm
pathtopython
supportname
supportemail
supportpage
dbsessions
sessiontimeoutwarning
sessioncookie
sessioncookiepath
sessioncookiedomain
statsfirstrun
statsmaxruntime
statsruntimedays
statsuserthreshold
slasharguments
getremoteaddrconf
reverseproxyignore
proxyhost
proxyport
proxytype
proxyuser
proxypassword
proxybypass
maintenance_enabled
maintenance_message
deleteunconfirmed
deleteincompleteusers
disablegradehistory
gradehistorylifetime
tempdatafoldercleanup
filescleanupperiod
extramemorylimit
maxtimelimit
curlcache
curltimeoutkbitrate
cron_enabled
task_scheduled_concurrency_limit
task_scheduled_max_runtime
task_adhoc_concurrency_limit
task_adhoc_max_runtime
task_logmode
task_logtostdout
task_logretention
task_logretainruns
smtphosts
smtpsecure
smtpauthtype
smtpuser
smtppass
smtpmaxbulk
allowedemaildomains
divertallemailsto
divertallemailsexcept
emaildkimselector
sitemailcharset
allowusermailcharset
allowattachments
mailnewline
emailfromvia
emailsubjectprefix
emailheaders
updateautocheck
updateminmaturity
updatenotifybuilds
enablewsdocumentation
dndallowtextandlinks
pathtosassc
contextlocking
contextlockappliestoadmin
forceclean
enablecourserelativedates
debug
debugdisplay
perfdebug
debugstringids
debugsqltrace
debugvalidators
debugpageinfo
profilingenabled
profilingincluded
profilingexcluded
profilingautofrec
profilingallowme
profilingallowall
profilingslow
profilinglifetime
profilingimportprefix
release
localcachedirpurged
scheduledtaskreset
paygw_plugins_sortorder
allversionshash
registrationpending
branch
enableaccessibilitytools
notloggedinroleid
guestroleid
defaultuserroleid
creatornewroleid
restorernewroleid
sitepolicyhandler
gradebookroles
h5plibraryhandler
jabberhost
jabberserver
jabberusername
jabberpassword
jabberport
airnotifierurl
airnotifierport
airnotifiermobileappname
airnotifierappname
airnotifieraccesskey
chat_method
chat_refresh_userlist
chat_old_ping
chat_refresh_room
chat_normal_updatemode
chat_serverhost
chat_serverip
chat_serverport
chat_servermax
data_enablerssfeeds
feedback_allowfullanonymous
forum_displaymode
forum_shortpost
forum_longpost
forum_manydiscussions
forum_maxbytes
forum_maxattachments
forum_subscription
forum_trackingtype
forum_trackreadposts
forum_allowforcedreadtracking
forum_oldpostdays
forum_usermarksread
forum_cleanreadtime
digestmailtime
forum_enablerssfeeds
forum_enabletimedposts
glossary_entbypage
glossary_dupentries
glossary_allowcomments
glossary_linkbydefault
glossary_defaultapproval
glossary_enablerssfeeds
glossary_linkentries
glossary_casesensitive
glossary_fullmatch
block_course_list_adminview
block_course_list_hideallcourseslink
block_html_allowcssclasses
block_online_users_timetosee
block_online_users_onlinestatushiding
block_rss_client_num_entries
block_rss_client_timeout
pathtounoconv
filter_multilang_force_old
filter_censor_badwords
logguests
loglifetime
profileroles
coursecontact
frontpage
frontpageloggedin
maxcategorydepth
frontpagecourselimit
commentsperpage
defaultfrontpageroleid
messageinbound_enabled
messageinbound_mailbox
messageinbound_domain
messageinbound_host
messageinbound_hostssl
messageinbound_hostuser
messageinbound_hostpass
enablemobilewebservice
mobilecssurl
timezone
registerauth
dbtype
dblibrary
dbhost
dbname
dbuser
dbpass
prefix
wwwroot
dataroot
admin
directorypermissions
noreplyaddress
dirroot
filepermissions
umaskpermissions
libdir
tempdir
backuptempdir
cachedir
localcachedir
localrequestdir
langotherroot
langlocalroot
yui2version
yui3version
yuipatchlevel
```