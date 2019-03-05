#
# Table structure for table 'tx_ighistory_domain_model_period'
#
CREATE TABLE tx_ighistory_domain_model_period (
	year_start int(11) DEFAULT '0' NOT NULL,
	year_end int(11) DEFAULT '0' NOT NULL,
	elements int(11) unsigned DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_ighistory_domain_model_element'
#
CREATE TABLE tx_ighistory_domain_model_element (
	period int(11) unsigned DEFAULT '0' NOT NULL,

	headline varchar(255) DEFAULT '' NOT NULL,
	subheadline varchar(255) DEFAULT '' NOT NULL,
	images int(11) DEFAULT '0' NOT NULL,
	description text,
);
