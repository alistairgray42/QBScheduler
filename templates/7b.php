<div class="scontainer">
	<div class="name">
		<h2 class="tourneyname">&nbsp;</h2>
	</div>
	<div class="phase">
		<div class="phaseheader">
			<h2>Schedule</h2>
		</div>
		<div class="schedule center">
			<table>
				<thead>
					<tr><th>Round</th><th class="room0"></th><th class="room1"></th><th class="room2"></th><th>Bye</th></tr>
				</thead>
				<tbody>
				<?php
					$teamorder = array(array(3, 4, 2, 5, 1, 6, 0),
					                   array(4, 5, 3, 6, 0, 2, 1),
									   array(5, 6, 0, 4, 1, 3, 2),
									   array(0, 6, 1, 5, 2, 4, 3),
									   array(0, 1, 2, 6, 3, 5, 4),
									   array(1, 2, 0, 3, 4, 6, 5),
									   array(2, 3, 1, 4, 0, 5, 6),
									   array(3, 4, 2, 5, 1, 6, 0),
									   array(4, 5, 3, 6, 0, 2, 1),
									   array(5, 6, 0, 4, 1, 3, 2),
									   array(0, 6, 1, 5, 2, 4, 3),
									   array(0, 1, 2, 6, 3, 5, 4),
									   array(1, 2, 0, 3, 4, 6, 5),
									   array(2, 3, 1, 4, 0, 5, 6));
					foreach($teamorder as $round => $roundorder)
					{
						echo("<tr><th>" . ($round + 1) . "</th>");
						for($j = 0; $j < sizeof($roundorder) - 1; $j += 2)
							echo("<td><span class='team" . $roundorder[$j] . "'></span>&nbsp;<br><span class='team" . $roundorder[$j+1] . "'></span>&nbsp;</td>");
						echo("<td><span class='team" . end($roundorder) . "'></span>&nbsp;</td></tr>\n");
					}
				?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="instruction">
		<p>Teams will play every other team twice, for a twelve-game double round-robin. After the final game, the champion will be detrmined as follows:</p>
		<ul>
			<div class="finals2 finals3" style="display:none"><li>If the first-place team has two or more wins than every other team, then that team wins the tournament outright without the need for a final.</li></div>
			<div class="finals1" style="display:none"><li>If there is a single team with the best record, then that team wins the tournament outright without the need for a final.</li></div>
			<div class="finals1 finals2 finals3" style="display:none"><li>If there is a two-way tie for first, those teams would play in a one-game final. If there is a tie of three or more teams, those teams will play a series of single-elimination matches, seeded by points per game.</li></div>
			<div class="finals2" style="display:none"><li>If the first-place team has exactly one more win than the second-place team, then an advantaged final of up to two games will take place, with the second-place team needing to win twice but the first-place team needing to win only once. If there is a tie for second place, then entry into the finals will be broken by points per game.</li></div>
			<div class="finals3" style="display:none"><li>If the first-place team has exactly one more win than the second-place team, then an advantaged final of up to two games will take place, with the second-place team needing to win twice but the first-place team needing to win only once. If there is a tie for second place, then those teams will play each other to determine entry into the finals.</li></div>
		</ul>
	</div>
</div>