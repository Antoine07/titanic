echo "------script create db-------"

MySQL=$(cat <<EOF
DROP DATABASE IF EXISTS $MYSQL_DATABASE;
CREATE DATABASE $MYSQL_DATABASE DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
EOF
)

echo $MySQL | mysql --user=$MYSQL_USER --password=$MYSQL_PASSWORD