<?php
/*
1. CRYPT_STD_DES         // 2 character
2. CRYPT_EXT_DES        // 4 character
3. CRYPT_MD5           // 12 character
4. CRYPT_BLOWFISH     // 22 character
5. CRYPT_SHA256      // 16 character
6. CRYPT_SHA12      // 16 character
*/
// STD | EXT | MD5 | BLOWFISH | SHA256 | SHA512



// 2 character salt
if (CRYPT_STD_DES == 1)
{
//echo "Standard DES: ".crypt('something','str')."\n<br>";
//echo "Standard DES: ".crypt('something','')."\n<br>";

echo '<img src="" alt="'.crypt('something','').'" />';
}
else
{
echo "Standard DES not supported.\n<br>";
}

echo '<hr/>';

// 4 character salt
if (CRYPT_EXT_DES == 1)
{
echo "Extended DES: ".crypt('something','_S4..some')."\n<br>";
}
else
{
echo "Extended DES not supported.\n<br>";
}

echo '<hr/>';

// 12 character salt starting with $1$
if (CRYPT_MD5 == 1)
{
echo "MD5: ".crypt('something','$1$somethin$')."\n<br>";
}
else
{
echo "MD5 not supported.\n<br>";
}

echo '<hr/>';

// Salt starting with $2a$. The two digit cost parameter: 09. 22 characters
if (CRYPT_BLOWFISH == 1)
{
echo "Blowfish: ".crypt('something','$2a$09$anexamplestringforsalt$')."\n<br>";
}
else
{
echo "Blowfish DES not supported.\n<br>";
}

echo '<hr/>';

// 16 character salt starting with $5$. The default number of rounds is 5000.
if (CRYPT_SHA256 == 1)
{
echo "SHA-256: ".crypt('something','$5$rounds=5000$anexamplestringforsalt$')."\n<br>"; }
else
{
echo "SHA-256 not supported.\n<br>";
}

echo '<hr/>';

// 16 character salt starting with $5$. The default number of rounds is 5000.
if (CRYPT_SHA512 == 1)
{
echo "SHA-512: ".crypt('something','$6$rounds=5000$anexamplestringforsalt$');
}
else
{
echo "SHA-512 not supported.";
}
?>