srcdir = /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl
builddir = /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl
top_srcdir = /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl
top_builddir = /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl
EGREP = /usr/bin/grep -E
SED = /usr/bin/sed
CONFIGURE_COMMAND = './configure' '--with-php-config=/Applications/XAMPP/xamppfiles/bin/php-config' '--with-icu-dir=/opt/homebrew/opt/icu4c@76' 'PKG_CONFIG_PATH=/opt/homebrew/opt/icu4c@76/lib/pkgconfig'
CONFIGURE_OPTIONS = '--with-php-config=/Applications/XAMPP/xamppfiles/bin/php-config' '--with-icu-dir=/opt/homebrew/opt/icu4c@76' 'PKG_CONFIG_PATH=/opt/homebrew/opt/icu4c@76/lib/pkgconfig'
SHLIB_SUFFIX_NAME = dylib
SHLIB_DL_SUFFIX_NAME = so
AWK = awk
INTL_SHARED_LIBADD = -Wl,-rpath,/opt/homebrew/Cellar/icu4c@76/76.1_1/lib -L/opt/homebrew/Cellar/icu4c@76/76.1_1/lib -licuuc -licuio -licui18n
shared_objects_intl = php_intl.lo intl_error.lo intl_convert.lo collator/collator.lo collator/collator_class.lo collator/collator_sort.lo collator/collator_convert.lo collator/collator_locale.lo collator/collator_compare.lo collator/collator_attr.lo collator/collator_create.lo collator/collator_is_numeric.lo collator/collator_error.lo common/common_error.lo converter/converter.lo formatter/formatter.lo formatter/formatter_main.lo formatter/formatter_class.lo formatter/formatter_attr.lo formatter/formatter_data.lo formatter/formatter_format.lo formatter/formatter_parse.lo normalizer/normalizer.lo normalizer/normalizer_class.lo normalizer/normalizer_normalize.lo locale/locale.lo locale/locale_class.lo locale/locale_methods.lo dateformat/dateformat.lo dateformat/dateformat_class.lo dateformat/dateformat_attr.lo dateformat/dateformat_data.lo dateformat/dateformat_format.lo dateformat/dateformat_parse.lo msgformat/msgformat.lo msgformat/msgformat_attr.lo msgformat/msgformat_class.lo msgformat/msgformat_data.lo msgformat/msgformat_format.lo msgformat/msgformat_parse.lo grapheme/grapheme_string.lo grapheme/grapheme_util.lo resourcebundle/resourcebundle.lo resourcebundle/resourcebundle_class.lo resourcebundle/resourcebundle_iterator.lo transliterator/transliterator.lo transliterator/transliterator_class.lo transliterator/transliterator_methods.lo uchar/uchar.lo idn/idn.lo spoofchecker/spoofchecker_class.lo spoofchecker/spoofchecker.lo spoofchecker/spoofchecker_create.lo spoofchecker/spoofchecker_main.lo intl_convertcpp.lo common/common_enum.lo common/common_date.lo dateformat/dateformat_format_object.lo dateformat/dateformat_create.lo dateformat/dateformat_attrcpp.lo dateformat/dateformat_helpers.lo dateformat/datepatterngenerator_class.lo dateformat/datepatterngenerator_methods.lo msgformat/msgformat_helpers.lo timezone/timezone_class.lo timezone/timezone_methods.lo calendar/calendar_class.lo calendar/calendar_methods.lo calendar/gregoriancalendar_methods.lo breakiterator/breakiterator_class.lo breakiterator/breakiterator_iterators.lo breakiterator/breakiterator_methods.lo breakiterator/rulebasedbreakiterator_methods.lo breakiterator/codepointiterator_internal.lo breakiterator/codepointiterator_methods.lo
PHP_PECL_EXTENSION = intl
PHP_MODULES = $(phplibdir)/intl.la
PHP_ZEND_EX =
all_targets = $(PHP_MODULES) $(PHP_ZEND_EX)
install_targets = install-modules install-headers
prefix = /Applications/XAMPP/xamppfiles
exec_prefix = $(prefix)
libdir = ${exec_prefix}/lib
prefix = /Applications/XAMPP/xamppfiles
phplibdir = /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/modules
phpincludedir = /Applications/XAMPP/xamppfiles/include/php
CC = cc
CFLAGS = -g -O2
CFLAGS_CLEAN = $(CFLAGS)
CPP = cc -E
CPPFLAGS = -I/opt/homebrew/opt/icu4c@76/include -DHAVE_CONFIG_H
CXX = g++ -std=gnu++11
CXXFLAGS = -g -O2
CXXFLAGS_CLEAN = $(CXXFLAGS)
EXTENSION_DIR = /Applications/XAMPP/xamppfiles/lib/php/extensions/no-debug-non-zts-20210902
PHP_EXECUTABLE = /Applications/XAMPP/xamppfiles/bin/php
EXTRA_LDFLAGS =
EXTRA_LIBS =
INCLUDES = -I/Applications/XAMPP/xamppfiles/include/php -I/Applications/XAMPP/xamppfiles/include/php/main -I/Applications/XAMPP/xamppfiles/include/php/TSRM -I/Applications/XAMPP/xamppfiles/include/php/Zend -I/Applications/XAMPP/xamppfiles/include/php/ext -I/Applications/XAMPP/xamppfiles/include/php/ext/date/lib -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include
LFLAGS =
LDFLAGS = -L/opt/homebrew/opt/icu4c@76/lib
SHARED_LIBTOOL =
LIBTOOL = $(SHELL) $(top_builddir)/libtool
SHELL = /bin/sh
INSTALL_HEADERS =
BUILD_CC = cc
mkinstalldirs = $(top_srcdir)/build/shtool mkdir -p
INSTALL = $(top_srcdir)/build/shtool install -c
INSTALL_DATA = $(INSTALL) -m 644

DEFS = -I$(top_builddir)/include -I$(top_builddir)/main -I$(top_srcdir)
COMMON_FLAGS = $(DEFS) $(INCLUDES) $(EXTRA_INCLUDES) $(CPPFLAGS) $(PHP_FRAMEWORKPATH)

all: $(all_targets)
	@echo
	@echo "Build complete."
	@echo "Don't forget to run 'make test'."
	@echo

build-modules: $(PHP_MODULES) $(PHP_ZEND_EX)

build-binaries: $(PHP_BINARIES)

libphp.la: $(PHP_GLOBAL_OBJS) $(PHP_SAPI_OBJS)
	$(LIBTOOL) --mode=link $(CC) $(LIBPHP_CFLAGS) $(CFLAGS) $(EXTRA_CFLAGS) -rpath $(phptempdir) $(EXTRA_LDFLAGS) $(LDFLAGS) $(PHP_RPATHS) $(PHP_GLOBAL_OBJS) $(PHP_SAPI_OBJS) $(EXTRA_LIBS) $(ZEND_EXTRA_LIBS) -o $@
	-@$(LIBTOOL) --silent --mode=install cp $@ $(phptempdir)/$@ >/dev/null 2>&1

libs/libphp.bundle: $(PHP_GLOBAL_OBJS) $(PHP_SAPI_OBJS)
	$(CC) $(MH_BUNDLE_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS) $(LDFLAGS) $(EXTRA_LDFLAGS) $(PHP_GLOBAL_OBJS:.lo=.o) $(PHP_SAPI_OBJS:.lo=.o) $(PHP_FRAMEWORKS) $(EXTRA_LIBS) $(ZEND_EXTRA_LIBS) -o $@ && cp $@ libs/libphp.so

install: $(all_targets) $(install_targets)

install-sapi: $(OVERALL_TARGET)
	@echo "Installing PHP SAPI module:       $(PHP_SAPI)"
	-@$(mkinstalldirs) $(INSTALL_ROOT)$(bindir)
	-@if test ! -r $(phptempdir)/libphp.$(SHLIB_DL_SUFFIX_NAME); then \
		for i in 0.0.0 0.0 0; do \
			if test -r $(phptempdir)/libphp.$(SHLIB_DL_SUFFIX_NAME).$$i; then \
				$(LN_S) $(phptempdir)/libphp.$(SHLIB_DL_SUFFIX_NAME).$$i $(phptempdir)/libphp.$(SHLIB_DL_SUFFIX_NAME); \
				break; \
			fi; \
		done; \
	fi
	@$(INSTALL_IT)

install-binaries: build-binaries $(install_binary_targets)

install-modules: build-modules
	@test -d modules && \
	$(mkinstalldirs) $(INSTALL_ROOT)$(EXTENSION_DIR)
	@echo "Installing shared extensions:     $(INSTALL_ROOT)$(EXTENSION_DIR)/"
	@rm -f modules/*.la >/dev/null 2>&1
	@$(INSTALL) modules/* $(INSTALL_ROOT)$(EXTENSION_DIR)

install-headers:
	-@if test "$(INSTALL_HEADERS)"; then \
		for i in `echo $(INSTALL_HEADERS)`; do \
			i=`$(top_srcdir)/build/shtool path -d $$i`; \
			paths="$$paths $(INSTALL_ROOT)$(phpincludedir)/$$i"; \
		done; \
		$(mkinstalldirs) $$paths && \
		echo "Installing header files:          $(INSTALL_ROOT)$(phpincludedir)/" && \
		for i in `echo $(INSTALL_HEADERS)`; do \
			if test "$(PHP_PECL_EXTENSION)"; then \
				src=`echo $$i | $(SED) -e "s#ext/$(PHP_PECL_EXTENSION)/##g"`; \
			else \
				src=$$i; \
			fi; \
			if test -f "$(top_srcdir)/$$src"; then \
				$(INSTALL_DATA) $(top_srcdir)/$$src $(INSTALL_ROOT)$(phpincludedir)/$$i; \
			elif test -f "$(top_builddir)/$$src"; then \
				$(INSTALL_DATA) $(top_builddir)/$$src $(INSTALL_ROOT)$(phpincludedir)/$$i; \
			else \
				(cd $(top_srcdir)/$$src && $(INSTALL_DATA) *.h $(INSTALL_ROOT)$(phpincludedir)/$$i; \
				cd $(top_builddir)/$$src && $(INSTALL_DATA) *.h $(INSTALL_ROOT)$(phpincludedir)/$$i) 2>/dev/null || true; \
			fi \
		done; \
	fi

PHP_TEST_SETTINGS = -d 'open_basedir=' -d 'output_buffering=0' -d 'memory_limit=-1'
PHP_TEST_SHARED_EXTENSIONS =  ` \
	if test "x$(PHP_MODULES)" != "x"; then \
		for i in $(PHP_MODULES)""; do \
			. $$i; \
			if test "x$$dlname" != "xdl_test.so"; then \
				$(top_srcdir)/build/shtool echo -n -- " -d extension=$$dlname"; \
			fi; \
		done; \
	fi; \
	if test "x$(PHP_ZEND_EX)" != "x"; then \
		for i in $(PHP_ZEND_EX)""; do \
			. $$i; $(top_srcdir)/build/shtool echo -n -- " -d zend_extension=$(top_builddir)/modules/$$dlname"; \
		done; \
	fi`
PHP_DEPRECATED_DIRECTIVES_REGEX = '^(magic_quotes_(gpc|runtime|sybase)?|(zend_)?extension(_debug)?(_ts)?)[\t\ ]*='

test: all
	@if test ! -z "$(PHP_EXECUTABLE)" && test -x "$(PHP_EXECUTABLE)"; then \
		INI_FILE=`$(PHP_EXECUTABLE) -d 'display_errors=stderr' -r 'echo php_ini_loaded_file();' 2> /dev/null`; \
		if test "$$INI_FILE"; then \
			$(EGREP) -h -v $(PHP_DEPRECATED_DIRECTIVES_REGEX) "$$INI_FILE" > $(top_builddir)/tmp-php.ini; \
		else \
			echo > $(top_builddir)/tmp-php.ini; \
		fi; \
		INI_SCANNED_PATH=`$(PHP_EXECUTABLE) -d 'display_errors=stderr' -r '$$a = explode(",\n", trim(php_ini_scanned_files())); echo $$a[0];' 2> /dev/null`; \
		if test "$$INI_SCANNED_PATH"; then \
			INI_SCANNED_PATH=`$(top_srcdir)/build/shtool path -d $$INI_SCANNED_PATH`; \
			$(EGREP) -h -v $(PHP_DEPRECATED_DIRECTIVES_REGEX) "$$INI_SCANNED_PATH"/*.ini >> $(top_builddir)/tmp-php.ini; \
		fi; \
		TEST_PHP_EXECUTABLE=$(PHP_EXECUTABLE) \
		TEST_PHP_SRCDIR=$(top_srcdir) \
		CC="$(CC)" \
			$(PHP_EXECUTABLE) -n -c $(top_builddir)/tmp-php.ini $(PHP_TEST_SETTINGS) $(top_srcdir)/run-tests.php -n -c $(top_builddir)/tmp-php.ini -d extension_dir=$(top_builddir)/modules/ $(PHP_TEST_SHARED_EXTENSIONS) $(TESTS); \
		TEST_RESULT_EXIT_CODE=$$?; \
		rm $(top_builddir)/tmp-php.ini; \
		exit $$TEST_RESULT_EXIT_CODE; \
	else \
		echo "ERROR: Cannot run tests without CLI sapi."; \
	fi

clean:
	find . -name \*.gcno -o -name \*.gcda | xargs rm -f
	find . -name \*.lo -o -name \*.o -o -name \*.dep | xargs rm -f
	find . -name \*.la -o -name \*.a | xargs rm -f
	find . -name \*.so | xargs rm -f
	find . -name .libs -a -type d|xargs rm -rf
	rm -f libphp.la $(SAPI_CLI_PATH) $(SAPI_CGI_PATH) $(SAPI_LITESPEED_PATH) $(SAPI_FPM_PATH) $(OVERALL_TARGET) modules/* libs/*
	rm -f ext/opcache/jit/zend_jit_x86.c
	rm -f ext/opcache/jit/zend_jit_arm64.c
	rm -f ext/opcache/minilua

distclean: clean
	rm -f Makefile config.cache config.log config.status Makefile.objects Makefile.fragments libtool main/php_config.h main/internal_functions_cli.c main/internal_functions.c Zend/zend_dtrace_gen.h Zend/zend_dtrace_gen.h.bak Zend/zend_config.h
	rm -f main/build-defs.h scripts/phpize
	rm -f ext/date/lib/timelib_config.h ext/mbstring/libmbfl/config.h ext/oci8/oci8_dtrace_gen.h ext/oci8/oci8_dtrace_gen.h.bak
	rm -f scripts/man1/phpize.1 scripts/php-config scripts/man1/php-config.1 sapi/cli/php.1 sapi/cgi/php-cgi.1 sapi/phpdbg/phpdbg.1 ext/phar/phar.1 ext/phar/phar.phar.1
	rm -f sapi/fpm/php-fpm.conf sapi/fpm/init.d.php-fpm sapi/fpm/php-fpm.service sapi/fpm/php-fpm.8 sapi/fpm/status.html
	rm -f ext/phar/phar.phar ext/phar/phar.php
	if test "$(srcdir)" != "$(builddir)"; then \
	  rm -f ext/phar/phar/phar.inc; \
	fi
	$(EGREP) define'.*include/php' $(top_srcdir)/configure | $(SED) 's/.*>//'|xargs rm -f

prof-gen:
	CCACHE_DISABLE=1 $(MAKE) PROF_FLAGS=-fprofile-generate all

prof-clean:
	find . -name \*.lo -o -name \*.o | xargs rm -f
	find . -name \*.la -o -name \*.a | xargs rm -f
	find . -name \*.so | xargs rm -f
	rm -f libphp.la $(SAPI_CLI_PATH) $(SAPI_CGI_PATH) $(SAPI_LITESPEED_PATH) $(SAPI_FPM_PATH) $(OVERALL_TARGET) modules/* libs/*

prof-use:
	CCACHE_DISABLE=1 $(MAKE) PROF_FLAGS=-fprofile-use all

%_arginfo.h: %.stub.php
	@if test -e "$(top_srcdir)/build/gen_stub.php"; then \
		if test ! -z "$(PHP)"; then \
			echo Parse $< to generate $@;\
			$(PHP) $(top_srcdir)/build/gen_stub.php $<; \
		elif test ! -z "$(PHP_EXECUTABLE)" && test -x "$(PHP_EXECUTABLE)"; then \
			echo Parse $< to generate $@;\
			$(PHP_EXECUTABLE) $(top_srcdir)/build/gen_stub.php $<; \
		fi; \
	fi;

.PHONY: all clean install distclean test prof-gen prof-clean prof-use
.NOEXPORT:
-include php_intl.dep
php_intl.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/php_intl.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/php_intl.c -o php_intl.lo  -MMD -MF php_intl.dep -MT php_intl.lo
-include intl_error.dep
intl_error.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/intl_error.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/intl_error.c -o intl_error.lo  -MMD -MF intl_error.dep -MT intl_error.lo
-include intl_convert.dep
intl_convert.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/intl_convert.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/intl_convert.c -o intl_convert.lo  -MMD -MF intl_convert.dep -MT intl_convert.lo
-include collator/collator.dep
collator/collator.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator.c -o collator/collator.lo  -MMD -MF collator/collator.dep -MT collator/collator.lo
-include collator/collator_class.dep
collator/collator_class.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator_class.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator_class.c -o collator/collator_class.lo  -MMD -MF collator/collator_class.dep -MT collator/collator_class.lo
-include collator/collator_sort.dep
collator/collator_sort.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator_sort.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator_sort.c -o collator/collator_sort.lo  -MMD -MF collator/collator_sort.dep -MT collator/collator_sort.lo
-include collator/collator_convert.dep
collator/collator_convert.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator_convert.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator_convert.c -o collator/collator_convert.lo  -MMD -MF collator/collator_convert.dep -MT collator/collator_convert.lo
-include collator/collator_locale.dep
collator/collator_locale.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator_locale.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator_locale.c -o collator/collator_locale.lo  -MMD -MF collator/collator_locale.dep -MT collator/collator_locale.lo
-include collator/collator_compare.dep
collator/collator_compare.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator_compare.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator_compare.c -o collator/collator_compare.lo  -MMD -MF collator/collator_compare.dep -MT collator/collator_compare.lo
-include collator/collator_attr.dep
collator/collator_attr.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator_attr.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator_attr.c -o collator/collator_attr.lo  -MMD -MF collator/collator_attr.dep -MT collator/collator_attr.lo
-include collator/collator_create.dep
collator/collator_create.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator_create.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator_create.c -o collator/collator_create.lo  -MMD -MF collator/collator_create.dep -MT collator/collator_create.lo
-include collator/collator_is_numeric.dep
collator/collator_is_numeric.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator_is_numeric.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator_is_numeric.c -o collator/collator_is_numeric.lo  -MMD -MF collator/collator_is_numeric.dep -MT collator/collator_is_numeric.lo
-include collator/collator_error.dep
collator/collator_error.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator_error.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/collator/collator_error.c -o collator/collator_error.lo  -MMD -MF collator/collator_error.dep -MT collator/collator_error.lo
-include common/common_error.dep
common/common_error.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/common/common_error.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/common/common_error.c -o common/common_error.lo  -MMD -MF common/common_error.dep -MT common/common_error.lo
-include converter/converter.dep
converter/converter.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/converter/converter.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/converter/converter.c -o converter/converter.lo  -MMD -MF converter/converter.dep -MT converter/converter.lo
-include formatter/formatter.dep
formatter/formatter.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/formatter/formatter.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/formatter/formatter.c -o formatter/formatter.lo  -MMD -MF formatter/formatter.dep -MT formatter/formatter.lo
-include formatter/formatter_main.dep
formatter/formatter_main.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/formatter/formatter_main.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/formatter/formatter_main.c -o formatter/formatter_main.lo  -MMD -MF formatter/formatter_main.dep -MT formatter/formatter_main.lo
-include formatter/formatter_class.dep
formatter/formatter_class.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/formatter/formatter_class.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/formatter/formatter_class.c -o formatter/formatter_class.lo  -MMD -MF formatter/formatter_class.dep -MT formatter/formatter_class.lo
-include formatter/formatter_attr.dep
formatter/formatter_attr.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/formatter/formatter_attr.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/formatter/formatter_attr.c -o formatter/formatter_attr.lo  -MMD -MF formatter/formatter_attr.dep -MT formatter/formatter_attr.lo
-include formatter/formatter_data.dep
formatter/formatter_data.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/formatter/formatter_data.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/formatter/formatter_data.c -o formatter/formatter_data.lo  -MMD -MF formatter/formatter_data.dep -MT formatter/formatter_data.lo
-include formatter/formatter_format.dep
formatter/formatter_format.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/formatter/formatter_format.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/formatter/formatter_format.c -o formatter/formatter_format.lo  -MMD -MF formatter/formatter_format.dep -MT formatter/formatter_format.lo
-include formatter/formatter_parse.dep
formatter/formatter_parse.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/formatter/formatter_parse.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/formatter/formatter_parse.c -o formatter/formatter_parse.lo  -MMD -MF formatter/formatter_parse.dep -MT formatter/formatter_parse.lo
-include normalizer/normalizer.dep
normalizer/normalizer.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/normalizer/normalizer.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/normalizer/normalizer.c -o normalizer/normalizer.lo  -MMD -MF normalizer/normalizer.dep -MT normalizer/normalizer.lo
-include normalizer/normalizer_class.dep
normalizer/normalizer_class.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/normalizer/normalizer_class.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/normalizer/normalizer_class.c -o normalizer/normalizer_class.lo  -MMD -MF normalizer/normalizer_class.dep -MT normalizer/normalizer_class.lo
-include normalizer/normalizer_normalize.dep
normalizer/normalizer_normalize.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/normalizer/normalizer_normalize.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/normalizer/normalizer_normalize.c -o normalizer/normalizer_normalize.lo  -MMD -MF normalizer/normalizer_normalize.dep -MT normalizer/normalizer_normalize.lo
-include locale/locale.dep
locale/locale.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/locale/locale.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/locale/locale.c -o locale/locale.lo  -MMD -MF locale/locale.dep -MT locale/locale.lo
-include locale/locale_class.dep
locale/locale_class.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/locale/locale_class.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/locale/locale_class.c -o locale/locale_class.lo  -MMD -MF locale/locale_class.dep -MT locale/locale_class.lo
-include locale/locale_methods.dep
locale/locale_methods.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/locale/locale_methods.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/locale/locale_methods.c -o locale/locale_methods.lo  -MMD -MF locale/locale_methods.dep -MT locale/locale_methods.lo
-include dateformat/dateformat.dep
dateformat/dateformat.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat.c -o dateformat/dateformat.lo  -MMD -MF dateformat/dateformat.dep -MT dateformat/dateformat.lo
-include dateformat/dateformat_class.dep
dateformat/dateformat_class.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat_class.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat_class.c -o dateformat/dateformat_class.lo  -MMD -MF dateformat/dateformat_class.dep -MT dateformat/dateformat_class.lo
-include dateformat/dateformat_attr.dep
dateformat/dateformat_attr.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat_attr.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat_attr.c -o dateformat/dateformat_attr.lo  -MMD -MF dateformat/dateformat_attr.dep -MT dateformat/dateformat_attr.lo
-include dateformat/dateformat_data.dep
dateformat/dateformat_data.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat_data.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat_data.c -o dateformat/dateformat_data.lo  -MMD -MF dateformat/dateformat_data.dep -MT dateformat/dateformat_data.lo
-include dateformat/dateformat_format.dep
dateformat/dateformat_format.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat_format.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat_format.c -o dateformat/dateformat_format.lo  -MMD -MF dateformat/dateformat_format.dep -MT dateformat/dateformat_format.lo
-include dateformat/dateformat_parse.dep
dateformat/dateformat_parse.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat_parse.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat_parse.c -o dateformat/dateformat_parse.lo  -MMD -MF dateformat/dateformat_parse.dep -MT dateformat/dateformat_parse.lo
-include msgformat/msgformat.dep
msgformat/msgformat.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/msgformat/msgformat.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/msgformat/msgformat.c -o msgformat/msgformat.lo  -MMD -MF msgformat/msgformat.dep -MT msgformat/msgformat.lo
-include msgformat/msgformat_attr.dep
msgformat/msgformat_attr.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/msgformat/msgformat_attr.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/msgformat/msgformat_attr.c -o msgformat/msgformat_attr.lo  -MMD -MF msgformat/msgformat_attr.dep -MT msgformat/msgformat_attr.lo
-include msgformat/msgformat_class.dep
msgformat/msgformat_class.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/msgformat/msgformat_class.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/msgformat/msgformat_class.c -o msgformat/msgformat_class.lo  -MMD -MF msgformat/msgformat_class.dep -MT msgformat/msgformat_class.lo
-include msgformat/msgformat_data.dep
msgformat/msgformat_data.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/msgformat/msgformat_data.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/msgformat/msgformat_data.c -o msgformat/msgformat_data.lo  -MMD -MF msgformat/msgformat_data.dep -MT msgformat/msgformat_data.lo
-include msgformat/msgformat_format.dep
msgformat/msgformat_format.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/msgformat/msgformat_format.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/msgformat/msgformat_format.c -o msgformat/msgformat_format.lo  -MMD -MF msgformat/msgformat_format.dep -MT msgformat/msgformat_format.lo
-include msgformat/msgformat_parse.dep
msgformat/msgformat_parse.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/msgformat/msgformat_parse.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/msgformat/msgformat_parse.c -o msgformat/msgformat_parse.lo  -MMD -MF msgformat/msgformat_parse.dep -MT msgformat/msgformat_parse.lo
-include grapheme/grapheme_string.dep
grapheme/grapheme_string.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/grapheme/grapheme_string.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/grapheme/grapheme_string.c -o grapheme/grapheme_string.lo  -MMD -MF grapheme/grapheme_string.dep -MT grapheme/grapheme_string.lo
-include grapheme/grapheme_util.dep
grapheme/grapheme_util.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/grapheme/grapheme_util.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/grapheme/grapheme_util.c -o grapheme/grapheme_util.lo  -MMD -MF grapheme/grapheme_util.dep -MT grapheme/grapheme_util.lo
-include resourcebundle/resourcebundle.dep
resourcebundle/resourcebundle.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/resourcebundle/resourcebundle.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/resourcebundle/resourcebundle.c -o resourcebundle/resourcebundle.lo  -MMD -MF resourcebundle/resourcebundle.dep -MT resourcebundle/resourcebundle.lo
-include resourcebundle/resourcebundle_class.dep
resourcebundle/resourcebundle_class.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/resourcebundle/resourcebundle_class.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/resourcebundle/resourcebundle_class.c -o resourcebundle/resourcebundle_class.lo  -MMD -MF resourcebundle/resourcebundle_class.dep -MT resourcebundle/resourcebundle_class.lo
-include resourcebundle/resourcebundle_iterator.dep
resourcebundle/resourcebundle_iterator.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/resourcebundle/resourcebundle_iterator.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/resourcebundle/resourcebundle_iterator.c -o resourcebundle/resourcebundle_iterator.lo  -MMD -MF resourcebundle/resourcebundle_iterator.dep -MT resourcebundle/resourcebundle_iterator.lo
-include transliterator/transliterator.dep
transliterator/transliterator.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/transliterator/transliterator.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/transliterator/transliterator.c -o transliterator/transliterator.lo  -MMD -MF transliterator/transliterator.dep -MT transliterator/transliterator.lo
-include transliterator/transliterator_class.dep
transliterator/transliterator_class.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/transliterator/transliterator_class.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/transliterator/transliterator_class.c -o transliterator/transliterator_class.lo  -MMD -MF transliterator/transliterator_class.dep -MT transliterator/transliterator_class.lo
-include transliterator/transliterator_methods.dep
transliterator/transliterator_methods.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/transliterator/transliterator_methods.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/transliterator/transliterator_methods.c -o transliterator/transliterator_methods.lo  -MMD -MF transliterator/transliterator_methods.dep -MT transliterator/transliterator_methods.lo
-include uchar/uchar.dep
uchar/uchar.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/uchar/uchar.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/uchar/uchar.c -o uchar/uchar.lo  -MMD -MF uchar/uchar.dep -MT uchar/uchar.lo
-include idn/idn.dep
idn/idn.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/idn/idn.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/idn/idn.c -o idn/idn.lo  -MMD -MF idn/idn.dep -MT idn/idn.lo
-include spoofchecker/spoofchecker_class.dep
spoofchecker/spoofchecker_class.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/spoofchecker/spoofchecker_class.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/spoofchecker/spoofchecker_class.c -o spoofchecker/spoofchecker_class.lo  -MMD -MF spoofchecker/spoofchecker_class.dep -MT spoofchecker/spoofchecker_class.lo
-include spoofchecker/spoofchecker.dep
spoofchecker/spoofchecker.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/spoofchecker/spoofchecker.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/spoofchecker/spoofchecker.c -o spoofchecker/spoofchecker.lo  -MMD -MF spoofchecker/spoofchecker.dep -MT spoofchecker/spoofchecker.lo
-include spoofchecker/spoofchecker_create.dep
spoofchecker/spoofchecker_create.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/spoofchecker/spoofchecker_create.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/spoofchecker/spoofchecker_create.c -o spoofchecker/spoofchecker_create.lo  -MMD -MF spoofchecker/spoofchecker_create.dep -MT spoofchecker/spoofchecker_create.lo
-include spoofchecker/spoofchecker_main.dep
spoofchecker/spoofchecker_main.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/spoofchecker/spoofchecker_main.c
	$(LIBTOOL) --mode=compile $(CC) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -DZEND_COMPILE_DL_EXT=1 -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/spoofchecker/spoofchecker_main.c -o spoofchecker/spoofchecker_main.lo  -MMD -MF spoofchecker/spoofchecker_main.dep -MT spoofchecker/spoofchecker_main.lo
$(phplibdir)/intl.la: ./intl.la
	$(LIBTOOL) --mode=install cp ./intl.la $(phplibdir)

./intl.la: $(shared_objects_intl) $(INTL_SHARED_DEPENDENCIES)
	$(LIBTOOL) --mode=link $(CXX) -shared $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS) $(LDFLAGS)  -o $@ -export-dynamic -avoid-version -prefer-pic -module -rpath $(phplibdir) $(EXTRA_LDFLAGS) $(shared_objects_intl) $(INTL_SHARED_LIBADD)

-include intl_convertcpp.dep
intl_convertcpp.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/intl_convertcpp.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/intl_convertcpp.cpp -o intl_convertcpp.lo  -MMD -MF intl_convertcpp.dep -MT intl_convertcpp.lo
-include common/common_enum.dep
common/common_enum.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/common/common_enum.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/common/common_enum.cpp -o common/common_enum.lo  -MMD -MF common/common_enum.dep -MT common/common_enum.lo
-include common/common_date.dep
common/common_date.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/common/common_date.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/common/common_date.cpp -o common/common_date.lo  -MMD -MF common/common_date.dep -MT common/common_date.lo
-include dateformat/dateformat_format_object.dep
dateformat/dateformat_format_object.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat_format_object.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat_format_object.cpp -o dateformat/dateformat_format_object.lo  -MMD -MF dateformat/dateformat_format_object.dep -MT dateformat/dateformat_format_object.lo
-include dateformat/dateformat_create.dep
dateformat/dateformat_create.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat_create.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat_create.cpp -o dateformat/dateformat_create.lo  -MMD -MF dateformat/dateformat_create.dep -MT dateformat/dateformat_create.lo
-include dateformat/dateformat_attrcpp.dep
dateformat/dateformat_attrcpp.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat_attrcpp.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat_attrcpp.cpp -o dateformat/dateformat_attrcpp.lo  -MMD -MF dateformat/dateformat_attrcpp.dep -MT dateformat/dateformat_attrcpp.lo
-include dateformat/dateformat_helpers.dep
dateformat/dateformat_helpers.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat_helpers.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/dateformat_helpers.cpp -o dateformat/dateformat_helpers.lo  -MMD -MF dateformat/dateformat_helpers.dep -MT dateformat/dateformat_helpers.lo
-include dateformat/datepatterngenerator_class.dep
dateformat/datepatterngenerator_class.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/datepatterngenerator_class.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/datepatterngenerator_class.cpp -o dateformat/datepatterngenerator_class.lo  -MMD -MF dateformat/datepatterngenerator_class.dep -MT dateformat/datepatterngenerator_class.lo
-include dateformat/datepatterngenerator_methods.dep
dateformat/datepatterngenerator_methods.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/datepatterngenerator_methods.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/dateformat/datepatterngenerator_methods.cpp -o dateformat/datepatterngenerator_methods.lo  -MMD -MF dateformat/datepatterngenerator_methods.dep -MT dateformat/datepatterngenerator_methods.lo
-include msgformat/msgformat_helpers.dep
msgformat/msgformat_helpers.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/msgformat/msgformat_helpers.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/msgformat/msgformat_helpers.cpp -o msgformat/msgformat_helpers.lo  -MMD -MF msgformat/msgformat_helpers.dep -MT msgformat/msgformat_helpers.lo
-include timezone/timezone_class.dep
timezone/timezone_class.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/timezone/timezone_class.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/timezone/timezone_class.cpp -o timezone/timezone_class.lo  -MMD -MF timezone/timezone_class.dep -MT timezone/timezone_class.lo
-include timezone/timezone_methods.dep
timezone/timezone_methods.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/timezone/timezone_methods.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/timezone/timezone_methods.cpp -o timezone/timezone_methods.lo  -MMD -MF timezone/timezone_methods.dep -MT timezone/timezone_methods.lo
-include calendar/calendar_class.dep
calendar/calendar_class.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/calendar/calendar_class.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/calendar/calendar_class.cpp -o calendar/calendar_class.lo  -MMD -MF calendar/calendar_class.dep -MT calendar/calendar_class.lo
-include calendar/calendar_methods.dep
calendar/calendar_methods.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/calendar/calendar_methods.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/calendar/calendar_methods.cpp -o calendar/calendar_methods.lo  -MMD -MF calendar/calendar_methods.dep -MT calendar/calendar_methods.lo
-include calendar/gregoriancalendar_methods.dep
calendar/gregoriancalendar_methods.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/calendar/gregoriancalendar_methods.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/calendar/gregoriancalendar_methods.cpp -o calendar/gregoriancalendar_methods.lo  -MMD -MF calendar/gregoriancalendar_methods.dep -MT calendar/gregoriancalendar_methods.lo
-include breakiterator/breakiterator_class.dep
breakiterator/breakiterator_class.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/breakiterator/breakiterator_class.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/breakiterator/breakiterator_class.cpp -o breakiterator/breakiterator_class.lo  -MMD -MF breakiterator/breakiterator_class.dep -MT breakiterator/breakiterator_class.lo
-include breakiterator/breakiterator_iterators.dep
breakiterator/breakiterator_iterators.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/breakiterator/breakiterator_iterators.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/breakiterator/breakiterator_iterators.cpp -o breakiterator/breakiterator_iterators.lo  -MMD -MF breakiterator/breakiterator_iterators.dep -MT breakiterator/breakiterator_iterators.lo
-include breakiterator/breakiterator_methods.dep
breakiterator/breakiterator_methods.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/breakiterator/breakiterator_methods.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/breakiterator/breakiterator_methods.cpp -o breakiterator/breakiterator_methods.lo  -MMD -MF breakiterator/breakiterator_methods.dep -MT breakiterator/breakiterator_methods.lo
-include breakiterator/rulebasedbreakiterator_methods.dep
breakiterator/rulebasedbreakiterator_methods.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/breakiterator/rulebasedbreakiterator_methods.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/breakiterator/rulebasedbreakiterator_methods.cpp -o breakiterator/rulebasedbreakiterator_methods.lo  -MMD -MF breakiterator/rulebasedbreakiterator_methods.dep -MT breakiterator/rulebasedbreakiterator_methods.lo
-include breakiterator/codepointiterator_internal.dep
breakiterator/codepointiterator_internal.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/breakiterator/codepointiterator_internal.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/breakiterator/codepointiterator_internal.cpp -o breakiterator/codepointiterator_internal.lo  -MMD -MF breakiterator/codepointiterator_internal.dep -MT breakiterator/codepointiterator_internal.lo
-include breakiterator/codepointiterator_methods.dep
breakiterator/codepointiterator_methods.lo: /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/breakiterator/codepointiterator_methods.cpp
	$(LIBTOOL) --mode=compile $(CXX) -I. -I/Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl $(COMMON_FLAGS) $(CXXFLAGS_CLEAN) $(EXTRA_CXXFLAGS)  -I/opt/homebrew/Cellar/icu4c@76/76.1_1/include  -DU_NO_DEFAULT_INCLUDE_UTF_HEADERS=1 -DU_HIDE_OBSOLETE_UTF_OLD_H=1 -Wno-write-strings -D__STDC_LIMIT_MACROS -D__STDC_CONSTANT_MACROS -D__STDC_FORMAT_MACROS -DZEND_ENABLE_STATIC_TSRMLS_CACHE=1 -std=c++11  -DUNISTR_FROM_CHAR_EXPLICIT=explicit -DUNISTR_FROM_STRING_EXPLICIT=explicit -c /Users/taufi/Documents/GitHub/CodeIgniter4/php-8.1.17/ext/intl/breakiterator/codepointiterator_methods.cpp -o breakiterator/codepointiterator_methods.lo  -MMD -MF breakiterator/codepointiterator_methods.dep -MT breakiterator/codepointiterator_methods.lo
