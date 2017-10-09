# php-pthreads-segfault
Simple project used for recreating a php-pthreads-segfault.

# Run
php ./segfault.php

# PHP Compilation Steps (branch: 7.2)
cd ~
git clone https://github.com/php/php-src
cd ./php-src
git checkout origin/master -b php-7.2
cd ./ext
git clone https://github.com/krakjoe/pthreads
git clone https://github.com/nrk/phpiredis.git
cd ../

rm -f ./configure
./buildconf --force

./configure \
--enable-maintainer-zts \
--enable-debug \
--enable-pthreads \
--enable-phpiredis \
--with-mysqli \
--enable-embedded-mysqli \
--with-zlib \
--with-curl \
--enable-opcache \
--with-openssl=/usr \
--with-sodium

make clean
make all
make install
