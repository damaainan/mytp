

# 生成 swagger 文档
php vendor/zircote/swagger-php/bin/swagger apps/admin/controller/ apps/api/controller/ -o public/swagger-doc/swagger-api.json
php vendor/zircote/swagger-php/bin/swagger apps/index/controller/ -o public/swagger-doc/swagger.json