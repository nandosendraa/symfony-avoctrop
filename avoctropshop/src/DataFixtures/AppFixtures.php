<?php

namespace App\DataFixtures;

use App\Entity\Noticias;
use App\Entity\Recetas;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;
    public function __construct(UserPasswordHasherInterface $passwordHasher){
        $this->passwordHasher = $passwordHasher;
    }
    public function load(ObjectManager $manager): void
    {

        $user = new User();
        $user->setNombre('Joel');
        $user->setApellidos('Sendra Ye');
        $user->setEmail('correo@correo.com');
        $plainPassword = "11111111";
        $hashedPassword = $this->passwordHasher->hashPassword($user,$plainPassword);
        $user->setPassword($hashedPassword);
        $user->setTelefono('666777888');
        $user->setProfile('ye');
        $user->setRole('ROLE_ADMIN');
        $manager->persist($user);

        $receta = new Recetas();
        $receta->setNombre('BATIDO DETOX');
        $receta->setIngredientes('2 aguacates medianos,Medio pepino,50 g tofu blando,60 ml de zumo de limón,1 cda. de perejil picado,Hojas de menta al gusto,1 cdta. de sal,750 ml de agua');
        $receta->setPasos('Introduce todos los ingredientes en la batidora hasta lograr una crema suave y homogénea.,Para tomarla fría deja que repose durante una hora aproximadamente en la nevera.,Puedes añadirle frutos secos picados para darle un toque "crunchy".');
        $receta->setImg('detox');
        $receta->setColor('#EDF1D6');
        $receta->setTop(true);

        $manager->persist($receta);

        $receta = new Recetas();
        $receta->setNombre('GUACAMOLE CON MANGO');
        $receta->setIngredientes('3 Aguacates|1 Mango|Media cebolla morada|Cilantro fresco|2 cucharadas de zumo de limón|1 pizca de sal');
        $receta->setPasos('Ponga los aguacates pelados y deshuesados en un bol y tritúrelos.|Pique y agregue el resto de ingredientes al bol y mézclelos bien hasta que queden integrados.');
        $receta->setMasPasos('Decore con queso fresco o feta desmenuzado.|Para darle más sabor, puede picar tomates y jalapeños y agregarlos a la mezcla.');
        $receta->setImg('detox');
        $receta->setColor('#DFE4A7');
        $receta->setTop(false);

        $manager->persist($receta);

        $receta = new Recetas();
        $receta->setNombre('TÉ DE HUESO DE AGUACATE');
        $receta->setIngredientes('1 hueso de aguacate');
        $receta->setPasos('Lavar el hueso con agua.|Ponerlo a hervir con 1l de agua a fuego lento durante 15 minutos.|Dejarlo enfriar y ¡a disfrutar!|Puedes acompañarlo con una cucharada de miel para darle un toque más dulce.');
        $receta->setImg('detox');
        $receta->setColor('#FCFFD3');
        $receta->setTop(false);

        $manager->persist($receta);


        $manager->flush();
    }
}
