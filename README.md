# Litwinbook – Serwis Społecznościowy

Litwinbook to aplikacja internetowa typu social media (inspirowana serwisem Facebook), stworzona w frameworku Laravel. Projekt powstał w celach prezentacji umiejętności programistycznych, znajomości wzorców projektowych MVC, bezpiecznego zarządzania konfiguracją oraz integracji relacyjnej bazy danych i usług zewnętrznych (SMTP).

## Kluczowe Funkcjonalności
* Architektura MVC oparta na frameworku Laravel
* System powiadomień e-mail weryfikujący akcje użytkownika (SMTP)
* Wydajna, relacyjna baza danych zoptymalizowana pod kątem relacji społecznościowych
* Bezpieczne przechowywanie danych wrażliwych przy użyciu zmiennych środowiskowych

## Spis Treści
- [Wymagania wstępne](#wymagania-wstępne)
- [Baza danych SQL](#baza-danych-sql)
- [Konfiguracja pliku .env](#konfiguracja-pliku-env)
- [Instrukcja uruchomienia](#instrukcja-uruchomienia)

---

## Wymagania wstępne
Przed uruchomieniem projektu upewnij się, że posiadasz zainstalowane w swoim środowisku lokalnym:
* PHP (w wersji zgodnej z wymaganiami danej wersji frameworka Laravel)
* Composer (menedżer pakietów PHP)
* System zarządzania bazą danych (np. MySQL / MariaDB)
* Narzędzie do obsługi baz danych (np. phpMyAdmin, DBeaver, TablePlus)

---

## Baza danych SQL
W katalogu `public/` znajduje się struktura bazy wraz z testowymi danymi niezbędnymi do prawidłowego działania serwisu Litwinbook.

1. Pobierz plik bazy danych bezpośrednio z projektu: `public/szt.sql`
2. Utwórz nową, czystą bazę danych w swoim systemie.
3. Zaimportuj plik `szt.sql` do nowo utworzonej bazy. Jeśli preferujesz pracę w terminalu, użyj polecenia:
   ```bash
   mysql -u twoj_login -p nazwa_bazy < public/szt.sql
   ```

---

## Konfiguracja pliku `.env`
Projekt wykorzystuje architekturę zmiennych środowiskowych `.env` do bezpiecznego zarządzania konfiguracją frameworka Laravel. Stwórz plik o nazwie `.env` w głównym katalogu projektu (możesz skopiować istniejący `.env.example`) i uzupełnij go swoimi danymi:

### 1. Połączenie z bazą danych
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nazwa_twojej_bazy
DB_USERNAME=twoj_login_bazy
DB_PASSWORD=twoje_haslo_bazy
```

### 2. Konfiguracja skrzynki e-mail (SMTP)
Wprowadź dane swojego serwera pocztowego (np. Mailtrap do testów lub Gmail), aby aplikacja mogła poprawnie wysyłać powiadomienia oraz e-maile systemowe:
```env
MAIL_MAILER=smtp
MAIL_HOST=://example.com
MAIL_PORT=587
MAIL_USERNAME=twoj_email@example.com
MAIL_PASSWORD=twoje_haslo_poczty
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=no-reply@litwinbook.local
MAIL_FROM_NAME="Litwinbook"
```

> ⚠️ **Bezpieczeństwo:** Plik `.env` zawiera klucze aplikacji oraz dane dostępowe. Zgodnie z dobrymi praktykami bezpieczeństwa, został on wykluczony z systemu kontroli wersji i znajduje się w pliku `.gitignore`.

---

## Instrukcja uruchomienia

Po poprawnym zaimportowaniu bazy danych `szt.sql` oraz konfiguracji pliku `.env`, wykonaj poniższe kroki w terminalu w głównym katalogu projektu:

1. **Instalacja zależności PHP:**
   ```bash
   composer install
   ```

2. **Wygenerowanie klucza aplikacji Laravel:**
   ```bash
   php artisan key:generate
   ```

3. **Uruchomienie lokalnego serwera deweloperskiego:**
   ```bash
   php artisan serve
   ```

Aplikacja będzie dostępna w przeglądarce pod adresem: `http://127.0.0.1:8000`
