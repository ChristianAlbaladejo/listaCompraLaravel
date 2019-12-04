<?php

use Illuminate\Database\Seeder;
use App\Producto;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        self::seedProductos();
        $this->command->info('Tabla productos inicializada con datos!');
        self::seedUsers();
        $this->command->info('Tabla usuarios inicializada con datos!');
    }
    private static function seedUsers()
    {
        User::truncate();

        $usuario1 = new User;
        $usuario1->name = "usuario1";
        $usuario1->email = "usuario1@email.com";
        $usuario1->password = bcrypt("usuario1");
        $usuario1->save();

        $usuario2 = new User;
        $usuario2->name = "usuario2";
        $usuario2->email = "usuario2@email.com";
        $usuario2->password = bcrypt("usuario2");
        $usuario2->save();
    }

    private function seedProductos(){
        Producto::truncate();
        foreach (self::$arrayProductos as $producto) {
            $p = new Producto;
            $p->nombre = $producto[0];
            $p->categoria = $producto[1];
            $p->save();
        }
    }

    private static $arrayProductos = array(
        array('Aceite', 'Aceites y grasas'),
        array('Aceite de oliva', 'Aceites y grasas'),
        array('Grasa comestible', 'Aceites y grasas'),
        array('Manteca', 'Aceites y grasas'),
        array('Manteca de cerdo', 'Aceites y grasas'),
        array('Margarina', 'Aceites y grasas'),
        array('Minarina', 'Aceites y grasas'),
        array('Agua con gas', 'Bebidas'),
        array('Agua sin gas', 'Bebidas'),
        array('Bebida hidratante', 'Bebidas'),
        array('Jugo de fruta', 'Bebidas'),
        array('Refresco', 'Bebidas'),
        array('Cerveza', 'Bebidas'),
        array('Jerez', 'Bebidas'),
        array('Rompope', 'Bebidas'),
        array('Sidra', 'Bebidas'),
        array('Vino de mesa', 'Bebidas'),
        array('Azúcar', 'Café, endulzantes y saborizantes'),
        array('Café soluble', 'Café, endulzantes y saborizantes'),
        array('Café tostado y molido', 'Café, endulzantes y saborizantes'),
        array('Jarabe p/preparar bebidas', 'Café, endulzantes y saborizantes'),
        array('Miel de abeja', 'Café, endulzantes y saborizantes'),
        array('Piloncillo', 'Café, endulzantes y saborizantes'),
        array('Polvo p/preparar bebidas', 'Café, endulzantes y saborizantes'),
        array('Te', 'Café, endulzantes y saborizantes'),
        array('Bistec de diezmillo de res', 'Carnes'),
        array('Bistec de espaldilla de res', 'Carnes'),
        array('Chuleta de res', 'Carnes'),
        array('Falda de res', 'Carnes'),
        array('Filete de res', 'Carnes'),
        array('Hígado de res', 'Carnes'),
        array('Milanesa de res', 'Carnes'),
        array('Panza de res', 'Carnes'),
        array('Res', 'Carnes'),
        array('Retazo hueso de res', 'Carnes'),
        array('Ternera', 'Carnes'),
        array('Cabeza de cerdo', 'Carnes'),
        array('Carnes molida de cerdo', 'Carnes'),
        array('Carnes molida de res', 'Carnes'),
        array('Cerdo', 'Carnes'),
        array('Chuleta ahumada de cerdo', 'Carnes'),
        array('Espinazo de cerdo', 'Carnes'),
        array('Lomo de cerdo', 'Carnes'),
        array('Milanesa de cerdo', 'Carnes'),
        array('Pata de cerdo', 'Carnes'),
        array('Pierna ce cerdo entera/ pernil', 'Carnes'),
        array('Pavo', 'Carnes'),
        array('Pechuga de pollo', 'Carnes'),
        array('Pierna de pollo', 'Carnes'),
        array('Pollo', 'Carnes'),
        array('Pollo entero', 'Carnes'),
        array('Arroz', 'Cereales'),
        array('Avena', 'Cereales'),
        array('Cereal mixto', 'Cereales'),
        array('Harina de arroz', 'Cereales'),
        array('Otros cereales', 'Cereales'),
        array('Ajonjolí', 'Condimentos y aderezos'),
        array('Canela', 'Condimentos y aderezos'),
        array('Chilorio', 'Condimentos y aderezos'),
        array('Clavo', 'Condimentos y aderezos'),
        array('Cochinita pibil', 'Condimentos y aderezos'),
        array('Concentrado de pollo', 'Condimentos y aderezos'),
        array('Condimento de achiote', 'Condimentos y aderezos'),
        array('Hojas de perejil', 'Condimentos y aderezos'),
        array('Mayonesa', 'Condimentos y aderezos'),
        array('Mole rojo en pasta', 'Condimentos y aderezos'),
        array('Mostaza', 'Condimentos y aderezos'),
        array('Pimienta', 'Condimentos y aderezos'),
        array('Polvo p/hornear', 'Condimentos y aderezos'),
        array('Sal', 'Condimentos y aderezos'),
        array('Sal molida de mesa', 'Condimentos y aderezos'),
        array('Salsa', 'Condimentos y aderezos'),
        array('Salsa catsup', 'Condimentos y aderezos'),
        array('Salsa de chile', 'Condimentos y aderezos'),
        array('Salsa de soya', 'Condimentos y aderezos'),
        array('Salsa inglesa', 'Condimentos y aderezos'),
        array('Salsa mexicana', 'Condimentos y aderezos'),
        array('Salsa picante', 'Condimentos y aderezos'),
        array('Sopa y crema', 'Condimentos y aderezos'),
        array('Vainilla', 'Condimentos y aderezos'),
        array('Vinagre', 'Condimentos y aderezos'),
        array('Cajeta', 'Dulces y golosinas'),
        array('Chocolate en tablillas', 'Dulces y golosinas'),
        array('Colación', 'Dulces y golosinas'),
        array('Flan', 'Dulces y golosinas'),
        array('Gelatina en polvo', 'Dulces y golosinas'),
        array('Peladillas', 'Dulces y golosinas'),
        array('Polvo bebida sabor chocolate', 'Dulces y golosinas'),
        array('Polvorón', 'Dulces y golosinas'),
        array('Postre estilo flan', 'Dulces y golosinas'),
        array('Praline', 'Dulces y golosinas'),
        array('Torta Imperial', 'Dulces y golosinas'),
        array('Turrón', 'Dulces y golosinas'),
        array('Chile', 'Legumbres secas'),
        array('Chile seco', 'Legumbres secas'),
        array('Frijol', 'Legumbres secas'),
        array('Garbanza', 'Legumbres secas'),
        array('Haba', 'Legumbres secas'),
        array('Lenteja', 'Legumbres secas'),
        array('Bolillo', 'Pan y derivados del trigo'),
        array('Cereales', 'Pan y derivados del trigo'),
        array('Galletas', 'Pan y derivados del trigo'),
        array('Galletas dulces', 'Pan y derivados del trigo'),
        array('Galletas populares', 'Pan y derivados del trigo'),
        array('Harina de trigo', 'Pan y derivados del trigo'),
        array('Harina hot cakes', 'Pan y derivados del trigo'),
        array('Pan de caja', 'Pan y derivados del trigo'),
        array('Pan tostado', 'Pan y derivados del trigo'),
        array('Pasta para sopa', 'Pan y derivados del trigo'),
        array('Pastelillos', 'Pan y derivados del trigo'),
        array('Tortilla de harina de trigo', 'Pan y derivados del trigo'),
        array('Almeja', 'Pescados y mariscos'),
        array('Atún', 'Pescados y mariscos'),
        array('Bacalao', 'Pescados y mariscos'),
        array('Blanco Nilo', 'Pescados y mariscos'),
        array('Boquerón', 'Pescados y mariscos'),
        array('Calamar', 'Pescados y mariscos'),
        array('Callo de hacha', 'Pescados y mariscos'),
        array('Camarón', 'Pescados y mariscos'),
        array('Carpa', 'Pescados y mariscos'),
        array('Cazón', 'Pescados y mariscos'),
        array('Charal', 'Pescados y mariscos'),
        array('Cintilla', 'Pescados y mariscos'),
        array('Curvina', 'Pescados y mariscos'),
        array('Gurrubata', 'Pescados y mariscos'),
        array('Huachinango', 'Pescados y mariscos'),
        array('Jaiba', 'Pescados y mariscos'),
        array('Langosta', 'Pescados y mariscos'),
        array('Langostino', 'Pescados y mariscos'),
        array('Lenguado', 'Pescados y mariscos'),
        array('Lisa', 'Pescados y mariscos'),
        array('Lobina', 'Pescados y mariscos'),
        array('Mero', 'Pescados y mariscos'),
        array('Mojarra', 'Pescados y mariscos'),
        array('Pámpano', 'Pescados y mariscos'),
        array('Pescado seco salado', 'Pescados y mariscos'),
        array('Pulpo', 'Pescados y mariscos'),
        array('Robalo', 'Pescados y mariscos'),
        array('Salmón', 'Pescados y mariscos'),
        array('Sardina', 'Pescados y mariscos'),
        array('Sierra', 'Pescados y mariscos'),
        array('Trucha', 'Pescados y mariscos'),
        array('Villajaiba', 'Pescados y mariscos'),
        array('Acelga', 'Frutas y verduras'),
        array('Aguacate', 'Frutas y verduras'),
        array('Ajo', 'Frutas y verduras'),
        array('Alcachofa', 'Frutas y verduras'),
        array('Alcaparra', 'Frutas y verduras'),
        array('Almendras', 'Frutas y verduras'),
        array('Apio', 'Frutas y verduras'),
        array('Avellana', 'Frutas y verduras'),
        array('Betabel', 'Frutas y verduras'),
        array('Brócoli', 'Frutas y verduras'),
        array('Cacahuates', 'Frutas y verduras'),
        array('Calabaza', 'Frutas y verduras'),
        array('Caña', 'Frutas y verduras'),
        array('Castañas', 'Frutas y verduras'),
        array('Cebolla', 'Frutas y verduras'),
        array('Champiñón', 'Frutas y verduras'),
        array('Chayote', 'Frutas y verduras'),
        array('Chícharos', 'Frutas y verduras'),
        array('Chile fresco', 'Frutas y verduras'),
        array('Chiles', 'Frutas y verduras'),
        array('Chiles gueros', 'Frutas y verduras'),
        array('Ciruela', 'Frutas y verduras'),
        array('Ciruela pasa', 'Frutas y verduras'),
        array('Col', 'Frutas y verduras'),
        array('Coliflor', 'Frutas y verduras'),
        array('Dátil', 'Frutas y verduras'),
        array('Durazno', 'Frutas y verduras'),
        array('Ejote', 'Frutas y verduras'),
        array('Elote', 'Frutas y verduras'),
        array('Espinacas', 'Frutas y verduras'),
        array('Fresa', 'Frutas y verduras'),
        array('Frijoles', 'Frutas y verduras'),
        array('Frutas cubiertas', 'Frutas y verduras'),
        array('Granada', 'Frutas y verduras'),
        array('Guanábana', 'Frutas y verduras'),
        array('Guayaba', 'Frutas y verduras'),
        array('Jamaica', 'Frutas y verduras'),
        array('Jícama', 'Frutas y verduras'),
        array('Jitomate', 'Frutas y verduras'),
        array('Kiwi', 'Frutas y verduras'),
        array('Lechuga', 'Frutas y verduras'),
        array('Lima', 'Frutas y verduras'),
        array('Limón', 'Frutas y verduras'),
        array('Mamey', 'Frutas y verduras'),
        array('Mandarina', 'Frutas y verduras'),
        array('Mango', 'Frutas y verduras'),
        array('Manzana', 'Frutas y verduras'),
        array('Melón', 'Frutas y verduras'),
        array('Naranja', 'Frutas y verduras'),
        array('Nopal', 'Frutas y verduras'),
        array('Nopalitos', 'Frutas y verduras'),
        array('Nuez', 'Frutas y verduras'),
        array('Orejón', 'Frutas y verduras'),
        array('Papa', 'Frutas y verduras'),
        array('Papaya', 'Frutas y verduras'),
        array('Pasa (Uva pasa)', 'Frutas y verduras'),
        array('Pepino', 'Frutas y verduras'),
        array('Pera', 'Frutas y verduras'),
        array('Pimiento', 'Frutas y verduras'),
        array('Piña', 'Frutas y verduras'),
        array('Plátano', 'Frutas y verduras'),
        array('Rábano', 'Frutas y verduras'),
        array('Romeritos', 'Frutas y verduras'),
        array('Sandía', 'Frutas y verduras'),
        array('Tamarindo', 'Frutas y verduras'),
        array('Tejocote', 'Frutas y verduras'),
        array('Tomate', 'Frutas y verduras'),
        array('Toronja', 'Frutas y verduras'),
        array('Tuna', 'Frutas y verduras'),
        array('Uva', 'Frutas y verduras'),
        array('Verdolaga', 'Frutas y verduras'),
        array('Zanahoria', 'Frutas y verduras'),
        array('Aceituna', 'Alimentos procesados'),
        array('Aceituna manzanilla', 'Alimentos procesados'),
        array('Aceituna rellena con pimiento', 'Alimentos procesados'),
        array('Alimento preparado p/niños', 'Alimentos procesados'),
        array('Chícharos en lata', 'Alimentos procesados'),
        array('Chiles en lata', 'Alimentos procesados'),
        array('Chiles largos en escabeche', 'Alimentos procesados'),
        array('Coctel de frutas en almíbar', 'Alimentos procesados'),
        array('Duraznos en almíbar', 'Alimentos procesados'),
        array('Hortalizas congeladas', 'Alimentos procesados'),
        array('Mango en almíbar', 'Alimentos procesados'),
        array('Mermelada', 'Alimentos procesados'),
        array('Pera en almíbar', 'Alimentos procesados'),
        array('Piña en almíbar', 'Alimentos procesados'),
        array('Puré de tomate', 'Alimentos procesados'),
        array('Huevo', 'Lácteos y huevo'),
        array('Crema', 'Lácteos y huevo'),
        array('Crema batida', 'Lácteos y huevo'),
        array('Mantequilla', 'Lácteos y huevo'),
        array('Queso canasto', 'Lácteos y huevo'),
        array('Queso chihuahua', 'Lácteos y huevo'),
        array('Queso cotija', 'Lácteos y huevo'),
        array('Queso doble crema', 'Lácteos y huevo'),
        array('Queso manchego', 'Lácteos y huevo'),
        array('Queso panela', 'Lácteos y huevo'),
        array('Queso sierra', 'Lácteos y huevo'),
        array('Yoghurt', 'Lácteos y huevo'),
        array('Fórmula láctea', 'Lácteos y huevo'),
        array('Leche condensada', 'Lácteos y huevo'),
        array('Leche en polvo', 'Lácteos y huevo'),
        array('Leche evaporada', 'Lácteos y huevo'),
        array('Leche pasteurizada', 'Lácteos y huevo'),
        array('Leche ultrapasteurizada', 'Lácteos y huevo'),
        array('Chorizo', 'Salchichonería'),
        array('Jamón', 'Salchichonería'),
        array('jamòn de pavo', 'Salchichonería'),
        array('Longaniza', 'Salchichonería'),
        array('Mortadela', 'Salchichonería'),
        array('Pastel pimiento', 'Salchichonería'),
        array('Paté', 'Salchichonería'),
        array('Queso de puerco', 'Salchichonería'),
        array('Salami', 'Salchichonería'),
        array('Salchicha', 'Salchichonería'),
        array('Tocino', 'Salchichonería'),
        array('Harina de maíz', 'Tortillas y maíz'),
        array('Maíz pozolero', 'Tortillas y maíz'),
        array('Tortilla de maíz', 'Tortillas y maíz'),
        array('Foco', 'Varios'),
        array('Pilas eléctricas', 'Varios'),
        array('Acondicionador / enjuague', 'Cuidado personal'),
        array('Champú', 'Cuidado personal'),
        array('Champú para bebés', 'Cuidado personal'),
        array('Crema dental', 'Cuidado personal'),
        array('Crema líquida', 'Cuidado personal'),
        array('Crema sólida', 'Cuidado personal'),
        array('Desodorante', 'Cuidado personal'),
        array('Jabon de tocador', 'Cuidado personal'),
        array('Pañales desechables', 'Cuidado personal'),
        array('Papel higiénico', 'Cuidado personal'),
        array('Rastrillos desechables', 'Cuidado personal'),
        array('Repuestos de navajas', 'Cuidado personal'),
        array('Tinte para el cabello', 'Cuidado personal'),
        array('Toalla femenina', 'Cuidado personal'),
        array('Toallita húmeda limpiadora', 'Cuidado personal'),
        array('Acondicionador de telas', 'Limpieza del hogar'),
        array('Barra limpiadora', 'Limpieza del hogar'),
        array('Blanqueador', 'Limpieza del hogar'),
        array('Detergente ropa', 'Limpieza del hogar'),
        array('Detergente ropa líquido', 'Limpieza del hogar'),
        array('Detergente ropa polvo', 'Limpieza del hogar'),
        array('Detergente trastes', 'Limpieza del hogar'),
        array('Insecticida aerosol', 'Limpieza del hogar'),
        array('Jabón de pasta', 'Limpieza del hogar'),
        array('Jabón limpiador', 'Limpieza del hogar'),
        array('Limpiador líquido', 'Limpieza del hogar'),
        array('Limpiador lìquido piso', 'Limpieza del hogar'),
        array('Servilletas de papel', 'Limpieza del hogar'),
        array('Suavizante ropa', 'Limpieza del hogar'),
        array('Toalla de papel', 'Limpieza del hogar')
    );



}
