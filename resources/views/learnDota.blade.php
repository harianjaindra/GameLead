@extends('layouts.body')
@section('content')
    <div class="container">

        <br>
        <div class="row">
            <div class="col-md-5 col-md-offset-5">
                <p>
                    Dota 2 Update - January 10th 2019 <br>

                    * Fixed a bug that caused Quickbuy items to disappear when multiple identical items were queued and the first item was completed.<br>
                    * Fixed a bug that caused player profile information (such as Ranked Medals) to not update in some cases.<br>
                    * The highlighted items at the Secret and Side shop now include items that can be completed with what's available in your inventory, and what's available at the shop you are near.<br>
                    <br><br>
                    Dota 2 Update - January 8th 2019<br>
                    * Added missing skirt to the Mistress of the Long Night set. Players who have already unbundled the set and own a Belt of the Long Night will be granted a corresponding Skirt of the Long Night.<br>
                    <br><br>
                    Dota 2 Update - January 7th, 2019<br>
                    * Frosthaven has now ended.<br>
                    * The Frostivus consumables bundle no longer contains Frosthaven consumables. Its price has been lowered to 750 to reflect this.<br>
                    <br><br>
                    Dota 2 Patch 7.20e<br>
                    <br><br>
                    7.20e:<br>
                    ==<br>
                    * Wraith Band: Bonus agility reduced from +8 to +6 (cost reduced by 25)<br>
                    * Bracer: Bonus strength reduced from +8 to +6 (cost reduced by 25)<br>
                    * Null Talisman: Bonus intelligence reduced from +8 to +6 (cost reduced by 25)<br>
                    * Power Treads: Bonus damage reduced from 16 to 12<br>
                    <br><br>
                    * Anti-Mage: Counterspell duration reduced from 1.4 to 1.2<br>
                    * Anti-Mage: Counterspell manacost increased from 40 to 45/50/55/60<br>
                    * Beastmaster: Level 25 Talent reduced from +40 Inner Beast Attack Speed to +30<br>
                    * Brewmaster: Drunken Brawler critical damage reduced from 200/220/240/260% to 170/200/230/260%<br>
                    * Brewmaster: Drunken Brawler cooldown increased from 20/19/18/17 to 23/21/19/17<br>
                    * Bristleback: Strength gain increased from 2.2 to 2.5<br>
                    * Bristleback: Bristleback now considers damage from towers as valid<br>
                    * Chaos Knight: Chaos Strike lifesteal increased from 35/45/55/65% to 50/55/60/65%<br>
                    * Dark Seer: Surge speed reduced from 36/54/72/90% to 30/45/60/75%<br>
                    * Dazzle: Poison Touch cast range reduced from 600/700/800/900 to 500/600/700/800<br>
                    * Dazzle: Poison Touch manacost increased from 80/100/120/140 to 95/110/125/140<br>
                    * Dazzle: Shallow Grave cooldown increased from 60/45/30/15 to 60/46/32/18<br>
                    * Death Prophet: Spirit Siphon charge replenish time reduced from 60/55/50/45 to 60/52/44/36<br>
                    * Death Prophet: Exorcism damage increased from 56-61 to 59-64<br>
                    * Ember Spirit: Strength increased from 20 + 2.4 to 21 + 2.6<br>
                    * Grimstroke: Ink Swell max stun duration reduced from 1.7/2.4/3.1/3.8 to 1.4/2.2/3/3.8<br>
                    * Grimstroke: Soulbind cooldown increased from 90/70/50 to 100/75/50<br>
                    * Gyrocopter: Agility gain increased from 2.8 to 3.1<br>
                    * Huskar: Level 10 Talent reduced from +20 Damage to +15<br>
                    * Juggernaut: Omnislash bonus damage from 30/45/60 to 30/40/50<br>
                    * Keeper of the Light: Will-O-Wisp off period increased from 1.75 to 1.85<br>
                    * Keeper of the Light: Will-O-Wisp AoE increased from 650 to 675<br>
                    * Lifestealer: Agility gain increased from 1.9 to 2.4<br>
                    * Lina: Base armor increased by 1<br>
                    * Lone Druid: Base movement speed reduced from 340 to 330<br>
                    * Lone Druid: Spirit Bear movement speed increased from 340/350/360/370 to 340/355/370/385<br>
                    * Lone Druid: Level 10 Talent reduced from +150 Attack Range to +125<br>
                    * Lone Druid: Level 20 Talent improved from -0.2 Spirit Bear Base Attack Time to -0.3<br>
                    * Magnus: Empower bonus damage reduced from 20/30/40/50 to 10/20/30/40%<br>
                    * Magnus: Empower cleave reduced from 20/38/56/74% to 14/34/54/74%<br>
                    * Magnus: Reverse Polarity cooldown increased from 120 to 130<br>
                    * Night Stalker: Dark Ascension cooldown reduced from 160/140/120 to 140/130/120<br>
                    * Outworld Devourer: Equilibrium mana restore from 80/100/120/140% to 65/90/115/140%<br>
                    * Phantom Assassin: Phantom Strike duration reduced from 2.25 to 2<br>
                    * Phantom Assassin: Stifling Dagger manacost increased from 30/25/20/15 to 30<br>
                    * Phantom Assassin: Coup de Grace critical damage reduced from 210/330/450% to 200/325/450%<br>
                    * Phantom Assassin: Blur manacost increased from 30 to 50<br>
                    * Puck: Base armor increased by 1<br>
                    * Puck: Illusory Orb cooldown reduced from 14/13/12/11 to 13/12/11/10<br>
                    * Queen of Pain: Agility increased from 18 + 2 to 22 + 2.2<br>
                    * Queen of Pain: Scream of Pain manacost reduced from 110/120/130/140 to 95/110/125/140<br>
                    * Riki: Base damage increased by 3<br>
                    * Sand King: Sand Storm damage reduced from 25/50/75/100 to 20/40/60/80<br>
                    * Shadow Fiend: Base armor increased by 1<br>
                    * Slark: Level 20 talent reduced from +1.5s Pounce Leash to +1.25s<br>
                    * Spectre: Haunt illusion damage increased from 40/55/70% to 40/60/80%<br>
                    * Storm Spirit: Base damage increased by 2<br>
                    * Sven: Base movement speed increased from 290 to 295<br>
                    * Sven: Warcry shield health is 25% stronger on your hero<br>
                    * Terrorblade: Metamorphosis movement speed loss increased from 25 to 30<br>
                    * Undying: Flesh Golem cooldown increased from 110 to 125<br>
                    * Undying: Level 10 Talent reduced from +10 Health Regen to +8<br>
                    * Ursa: Base movement speed increased from 305 to 315<br>
                    * Venomancer: Poison Nova damage increased from 30/55/80 to 40/65/90<br>
                </p>
            </div>
        </div>
        <br>
@endsection