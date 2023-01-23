run:
	php artisan serve
seed:
	php artisan db:seed --class=beritasSeeder
migrate:
	php artisan migrate
migratesql:	
	php artisan make:model Berita -mcr
npm:
	npm run dev
