<?php
Use App\Description;
Use App\Action;
Use App\DescriptionAndActions;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         DB::statement('SET FOREIGN_KEY_CHECKS=0;');
       // $this->call(NicknamesTableSeeder::class);
     //  Nicknames::truncate();
        //Nicknames::create();
       /* Nicknames::create(array(
                            'nickname' => 'Silaris',
                           'user_id' => 1 ));*/
        Description::truncate();
        //Nicknames::create();
        Description::create(array('desc' => 'Саурон посылает Назгулов в Шир чтобы добыть кольцо всевластия.' ));
        Description::create(array('desc' => 'Назгулы в Шире , что будете делать?' ));
        Description::create(array('desc' => 'Вы мертвы Назгулы убили селян и вас в том числе. Саурон заполучил кольцо всевластия , Средиземье пало.' ));
        Description::create(array('desc' => 'Вы успешно сбежали из Шира и держите путь в город Бриг. Назгулы начинают преследование хобитов.' ));
        Description::create(array('desc' => 'Вы спрятались в своем доме. Вы слышите ужасные крики с наружи дома.'));
        Description::create(array('desc' =>  'Через какое то время крики стихают. Вы выходите из дома что бы проверить  не ушли ли Назгулы , но погибаете от их рук .'));
        Description::create(array('desc' =>  '(После вашей смерти Средиземье обречено).' ));
        Description::create(array('desc' => 'После того как вы одели кольцо Назгулы учуяли . Вам чудом удается добраться до переправы у реки и спастись. Теперь ваш путь лежит в город Бриг.' ));
        Description::create(array('desc' => 'По прибытию в город вы пытаетесь разыскать Гендальфа. Уже поздно, вы заходите в трактир.' ));
        Description::create(array('desc' => 'В ходе беседы вы узнаете, что Гендальфа не видели более 6 месяцев. Во время разговора вы поскальзываетесь на пролитом эле и умираете.' ));
        Description::create(array('desc' => 'Вы опьянели, вы решаете по мериться силами с местными.  На следующий день ваше бездыханное тело в соседнем переулке находит трактирщик. ' ));
        Description::create(array('desc' => 'К сожалению, ваше приключение на этом заканчивается. ' ));
        Description::create(array('desc' => 'Местные вам не доверяют. Столкнувшись с одним из, вы случайным образом падаете на пол.' ));
        Description::create(array('desc' => 'Во время падения кольцо выскакивает и кармана и приземляется вам на палец вы исчезаете. После того как вы надели кольцо Назгулы узнают, где вы.' ));
        Description::create(array('desc' => 'Понимая это, вы снимаете кольцо и вновь становитесь видимым, в ужасе один из посетителей трактира и уводит вас на второй этаж.' ));
        Description::create(array('desc' => 'В тот момент когда вы уже собираетесь приступить к трапезе в трактире начинается потасовка. ' ));
        Description::create(array('desc' => 'Желая выбраться из нее живым, вы одеваете кольцо и исчезаете, что замечает один из посетителей. ' ));
        Description::create(array('desc' => 'Назгулы услышав зов кольца направляются к вам, понимая это вы снимаете кольцо, но тут же вас подхватывает незнакомец и уводит.' ));
        Description::create(array('desc' => 'Незнакомцем оказывается Арагорн. Он сообщает хоббитам, что знает, что это за кольцо и что его нужно уничтожить. ' ));
        Description::create(array('desc' => 'Единственным способом уничтожить кольцо можно ишь сбросив его в жерло Роковой горы. ' ));
        Description::create(array('desc' => 'Понимая, что выбора нет, герой решает отправится в сторону Мордора. Стоит выбор каким путем пойти.' ));
        Description::create(array('desc' => 'В горах проходя по узкой тропе Арагорн оступившись падает в пропасть. Оставшись одни и без припасов, вы умираете с голоду.' ));
        Description::create(array('desc' => 'В попытке пройти через Копи Мории вы заблудились. Блуждая долго по темным подземельям, вы выходите к началу подземелья. (Нужно было брать проводника) ' ));
        Description::create(array('desc' => 'Поняв что орков слишком многоb и что это глупая затея вы решаете отправится в столицу людей Минастирит.' ));
        Description::create(array('desc' => 'Вы сели на корабль и отплыли в Минастирит.' ));
        Description::create(array('desc' => 'Вы прибыли в Минастирит. В городе вы собираете команду для похода к Роковой Горе. ' ));
        Description::create(array('desc' => 'Собрав небольшую группу и выдвинувшись в путь, вы встречаете Гендальфа. ' ));       
        Description::create(array('desc' => 'Он сообщает, что все пути от Минастирита отрезаны приближающейся армией Саурона и что единственным выходом будет пройти через Копи Мории. ' ));
        Description::create(array('desc' => 'Гендальф спрашивает хранителя кольца(вас) о ваших дальнейших планах. ' ));
        Description::create(array('desc' => 'Дойдя до Копий Мори руководство группой берет на себя Гимли , не пройдя и полу часа Гимли находит толпу гоблинов и огра от которых вам чудом удается сбежать и пройти это подземелье.' ));
        Description::create(array('desc' => 'В ходе обороны города погибает один из участников группы (Аратор). Гендальф уводит группу по тайной тропе ведущей из Минастирита к Копям Мории.' ));
        Description::create(array('desc' => 'Используя магическую сферу Гендальфу удается избежать стычки с обитателями Копий и провести группу в целости и безопасности.  ' ));
        Description::create(array('desc' => 'В попытке сдаться оркам вы были убиты стрелой из лука. ' ));
        Description::create(array('desc' => 'После Мории группа отправилась в Мордор. Будучи в Мордоре, вы наткнулись на орков, группа разделилась. ' ));
        Description::create(array('desc' => 'Вы в месте с Арагоном отправились к Роковой горе. Дойдя в до жерла вулкана, вы можете уничтожить кольцо всевластия и покончить с Сауроном.' ));
        Description::create(array('desc' => 'Одев кольцо вы убегаете, Саурон знает где. Слуги Саурона убивают вас и возвращают кольцо своему господину. ' ));
        Description::create(array('desc' => 'Заполучив кольцо Средиземье было захвачено ордами Саурона. И воцарилось время вечной тьмы.' ));
        Description::create(array('desc' => 'Кольцо уничтожено, Саурон повержен на Средиземье спасено. Вы, прощаясь со своими спутниками возвращаетесь в свой родной дом в Шир. ' ));
        
        Action::truncate();
        Action::create(array('desc' => 'Собрать селян и дать  бой. '  ));
        Action::create(array('desc' => 'Сбежать из селения. '  ));
        Action::create(array('desc' => 'Спрятаться.'  ));
        Action::create(array('desc' => 'Использовать кольцо чтобы скрыться.'  ));
        Action::create(array('desc' => 'Попытаться узнать что то о Гендальфе у трактирщика. '  ));
        Action::create(array('desc' => 'У вас был тяжелый день, вы просите трактирщика вам налить. '  ));
        Action::create(array('desc' => 'Спросить у местных в трактире о Гендальфе. '  ));
        Action::create(array('desc' => 'Заказать  еды и эля.'  ));
        Action::create(array('desc' => 'Отправиться через заснеженный перевал в горах.'  ));
        Action::create(array('desc' => 'Пройти через копи Мории. '  ));
        Action::create(array('desc' => 'Прорваться через хельмову падь.'  ));
        Action::create(array('desc' => 'Отправиться в Минастирит за помощью. '  ));
        Action::create(array('desc' => 'Отправиться в Копи Мории. '  ));
        Action::create(array('desc' => 'Защищать  Минастирит.'  ));
        Action::create(array('desc' => 'Сдаться оркам. '  ));
        Action::create(array('desc' => 'Одеть кольцо и сбежать. '  ));
        Action::create(array('desc' => 'Кинуть кольцо в лаву. '  ));
        DescriptionAndActions::truncate();
        DescriptionAndActions::create(array('desc_id'=>1, 'next_desc_id'=>2, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>2, 'next_desc_id'=>3, 'action_id'=>1));
        DescriptionAndActions::create(array('desc_id'=>2, 'next_desc_id'=>4, 'action_id'=>2));
        DescriptionAndActions::create(array('desc_id'=>2, 'next_desc_id'=>5, 'action_id'=>3));
        DescriptionAndActions::create(array('desc_id'=>5, 'next_desc_id'=>6, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>6, 'next_desc_id'=>7, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>2, 'next_desc_id'=>8, 'action_id'=>4));
        DescriptionAndActions::create(array('desc_id'=>4, 'next_desc_id'=>9, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>8, 'next_desc_id'=>9, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>8, 'next_desc_id'=>9, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>8, 'next_desc_id'=>9, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>9, 'next_desc_id'=>10, 'action_id'=>5));
        DescriptionAndActions::create(array('desc_id'=>9, 'next_desc_id'=>11, 'action_id'=>6));
        DescriptionAndActions::create(array('desc_id'=>9, 'next_desc_id'=>13, 'action_id'=>7));
        DescriptionAndActions::create(array('desc_id'=>9, 'next_desc_id'=>16, 'action_id'=>8));
        DescriptionAndActions::create(array('desc_id'=>11, 'next_desc_id'=>12, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>13, 'next_desc_id'=>14, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>14, 'next_desc_id'=>15, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>16, 'next_desc_id'=>17, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>17, 'next_desc_id'=>18, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>15, 'next_desc_id'=>19, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>18, 'next_desc_id'=>19, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>19, 'next_desc_id'=>20, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>20, 'next_desc_id'=>21, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>21, 'next_desc_id'=>22, 'action_id'=>1));
        DescriptionAndActions::create(array('desc_id'=>21, 'next_desc_id'=>23, 'action_id'=>2));
        DescriptionAndActions::create(array('desc_id'=>21, 'next_desc_id'=>24, 'action_id'=>3));
        DescriptionAndActions::create(array('desc_id'=>21, 'next_desc_id'=>25, 'action_id'=>4));
        DescriptionAndActions::create(array('desc_id'=>23, 'next_desc_id'=>22, 'action_id'=>1));
        DescriptionAndActions::create(array('desc_id'=>23, 'next_desc_id'=>23, 'action_id'=>2));
        DescriptionAndActions::create(array('desc_id'=>23, 'next_desc_id'=>24, 'action_id'=>3));
        DescriptionAndActions::create(array('desc_id'=>23, 'next_desc_id'=>25, 'action_id'=>4));
        DescriptionAndActions::create(array('desc_id'=>24, 'next_desc_id'=>26, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>25, 'next_desc_id'=>26, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>26, 'next_desc_id'=>27, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>27, 'next_desc_id'=>28, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>28, 'next_desc_id'=>29, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>29, 'next_desc_id'=>30, 'action_id'=>1));
        DescriptionAndActions::create(array('desc_id'=>29, 'next_desc_id'=>31, 'action_id'=>2));
        DescriptionAndActions::create(array('desc_id'=>29, 'next_desc_id'=>33, 'action_id'=>3));
        DescriptionAndActions::create(array('desc_id'=>31, 'next_desc_id'=>32, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>30, 'next_desc_id'=>34, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>32, 'next_desc_id'=>34, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>34, 'next_desc_id'=>35, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>35, 'next_desc_id'=>36, 'action_id'=>1));
        DescriptionAndActions::create(array('desc_id'=>36, 'next_desc_id'=>37, 'action_id'=>0));
        DescriptionAndActions::create(array('desc_id'=>35, 'next_desc_id'=>38, 'action_id'=>2));
        
        
        
        
        
        
        
        
       // DescriptionAndActions::create(array
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
       
    }
}
