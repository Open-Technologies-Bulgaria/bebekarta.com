################################################################################
#
#   Copyright (c) 2011, Open Technologies Bulgaria, Ltd. <http://otb.bg> 
#   Author: Alexander Todorov <atodorov()otb.bg>
#
#   This program is free software: you can redistribute it and/or modify
#   it under the terms of the GNU General Public License as published by
#   the Free Software Foundation, either version 3 of the License, or
#   (at your option) any later version.
#
#   This program is distributed in the hope that it will be useful,
#   but WITHOUT ANY WARRANTY; without even the implied warranty of
#   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#   GNU General Public License for more details.
#
#   You should have received a copy of the GNU General Public License
#   along with this program.  If not, see <http://www.gnu.org/licenses/>.
#
################################################################################
#
# Makefile to build a tarball of themes/modules
#
################################################################################


bebekarta_ver := $(shell cat bebekarta/bebekarta.info | grep core | tr -s ' ' '=' | cut -f 2 -d=)-$(shell cat bebekarta/bebekarta.info | grep version | tr -s ' ' '=' | cut -f 2 -d=)
abuse_ver := $(shell cat abuse/abuse.info | grep version | tr -s ' ' '=' | cut -f 2 -d=)

bebekarta-theme:
	tar -czvf bebekarta-$(bebekarta_ver).tar.gz --exclude .git bebekarta/

abuse-module:
	tar -czvf abuse-$(abuse_ver).tar.gz --exclude .git abuse


clean:
	rm -f *.tar.gz

help:
	@echo "Usage: make <target>                                    "
	@echo "                                                        "
	@echo " bebekarta-theme - build tarball for BebeKarta theme    "
	@echo " abuse-module - build tarball for customized Abuse module"
	@echo " clean - clean files used to build                      "
	@echo " help - show this help and exit                         "
