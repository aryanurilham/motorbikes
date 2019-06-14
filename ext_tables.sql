#
# Table structure for table 'tx_motorbikes_domain_model_motorbike'
#
CREATE TABLE tx_motorbikes_domain_model_motorbike (

	modelname varchar(255) DEFAULT '' NOT NULL,
	producer int(11) unsigned DEFAULT '0',
	tank int(11) unsigned DEFAULT '0',
	suspension int(11) unsigned DEFAULT '0',
	wheels int(11) unsigned DEFAULT '0',
	handlebar int(11) unsigned DEFAULT '0',
	frontlamp int(11) unsigned DEFAULT '0',
	rearlight int(11) unsigned DEFAULT '0',
	spy int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_motorbikes_domain_model_producer'
#
CREATE TABLE tx_motorbikes_domain_model_producer (

	name varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_motorbikes_domain_model_tank'
#
CREATE TABLE tx_motorbikes_domain_model_tank (

	maximum varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_motorbikes_domain_model_suspension'
#
CREATE TABLE tx_motorbikes_domain_model_suspension (

	endurance varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_motorbikes_domain_model_wheels'
#
CREATE TABLE tx_motorbikes_domain_model_wheels (

	size varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_motorbikes_domain_model_handlebar'
#
CREATE TABLE tx_motorbikes_domain_model_handlebar (

	size varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_motorbikes_domain_model_frontlamp'
#
CREATE TABLE tx_motorbikes_domain_model_frontlamp (

	size double(11,2) DEFAULT '0.00' NOT NULL,
	form int(11) DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_motorbikes_domain_model_rearlight'
#
CREATE TABLE tx_motorbikes_domain_model_rearlight (

	size varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_motorbikes_domain_model_spy'
#
CREATE TABLE tx_motorbikes_domain_model_spy (

	pair varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_motorbikes_domain_model_motorbike'
#
CREATE TABLE tx_motorbikes_domain_model_motorbike (
	categories int(11) unsigned DEFAULT '0' NOT NULL,
);
