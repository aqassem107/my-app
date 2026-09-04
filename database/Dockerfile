FROM mysql:latest

# Copy the SQL script into the entrypoint directory

# MySQL will automatiallyexecute this script on startup

COPY ./init.sql /docker-entrypoint-initdb.d/
