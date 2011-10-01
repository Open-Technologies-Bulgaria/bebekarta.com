################################################################################
#
#   Copyright (c) 2011, Open Technologies Bulgaria, Ltd. <http://otb.bg> 
#   Author: Alexander Todorov <atodorov()otb.bg>
#
################################################################################
#
# Makefile to help compile translations.
#
################################################################################

POT_NAME := "translations/abuse.pot"
pot:
	xgettext -L PHP --keyword=t abuse.* watchlist/* -o $(POT_NAME)

update: pot
	for f in translations/*.po; do msgmerge -s -U $$f $(POT_NAME); done

check:
	for f in translations/*.po; do msgfmt -cvo /dev/null $$f; done

clean:
	rm -rf translations/*.po~ *~

help:
	@echo "Usage: make <target>                                    "
	@echo "                                                        "
	@echo " pot - make new pot template                            "
	@echo " update - update po files with new strings              "
	@echo " check - check po files for errors                      "
	@echo " clean - clean extra files                              "
	@echo " help - show this help and exit                         "
