<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('conference_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->enum('gender', ['brother', 'sister']);
            $table->enum('age', ['15-17','18-20','21-25','26-30','30+']);
            $table->enum('region', [
                'adygea','altai-republic','bashkortostan','buryatia','dagestan','ingushetia','kabardino-balkaria','kalmykia','karachay-cherkess',
                'karelia','komi','mari-el','mordovia','sakha-yakutia','north-ossetia','tatarstan','tyva','udmurt','khakassia','chechnya','chuvashia',
                'altai-krai','zabaykalsky','kamchatka','krasnodar','krasnoyarsk','permsky','primorsky','stavropol','khabarovsk',
                'amur','arkhangelsk','astrakhan','belgorod','bryansk','vladimir','volgograd','vologda','voronezh','ivanovo','irkutsk','kaliningrad',
                'kaluga','kemerovo','kirov','kostroma','kurgan','kursk','leningrad','lipetsk','magadan','moscow-region','murmansk','nizhny-novgorod',
                'novgorod','novosibirsk','omsk','orenburg','orel','penza','pskov','rostov','ryazan','samara','saratov','sakhalin','sverdlovsk',
                'smolensk','tambov','tver','tomsk','tula','tyumen','ulyanovsk','chelyabinsk','yaroslavl','jewish','nenets','khanty-mansi','chukotka','yamalo-nenets','none'
            ]);
            $table->string('city');
            $table->string('church');
            $table->string('denomination');
            $table->enum('maritalstatus', ['married','notmarried']);
            $table->enum('sleep', ['required','self','help']);
            $table->text('wishes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};