<div id="secondary-nav-wrapper" class="large-11 medium-11 small-11 columns show-for-medium-up">
    <nav id="secondary-nav" class="top-bar" data-topbar>

        <section class="top-bar-section">


            <!-- Top Nav Section -->
            <ul class="left">

                <li><?php echo $this->Html->link(__('Jobs'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
                <li class="divider"></li>
                <li class="active"><?php echo $this->Html->link(__('Manage'), array('controller' => 'jobs', 'action' => 'manage')); ?> </li>
                <li class="divider"></li>

            </ul>
        </section>
    </nav>
</div>

<div class="full-width-content">
    <h2>Manage Jobs <?php echo $this->Html->link(__('Create New Job'), array('controller' => 'jobs','action' => 'addJob'), array('class' => 'small button right')); ?></h2>
    <table width="100%">
        <tr>
            <th>Name</th>
            <th>Collection</th>
            <th>Location</th>
            <th>Status</th>
        </tr>
        <?php
            foreach($jobs as $job){ ?>
                <tr>
                <td><?php echo $job['Job']['name'];?></td>
                <td><?php echo $job['Job']['collection_id'];?></td>
                <td><?php echo debug($dropoffPoint);?></td>
                <td><?php echo $job['Job']['status'];?></td>
                <td style="text-align:right;">
                    <?php echo $this->Html->link(__('Edit'), array('controller' => 'Jobs', 'action' => 'edit', $job['Job']['id']), array('class' => 'button success small')); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'Jobs', 'action' => 'delete', $job['Job']['id']), array('class' => 'button small alert'),
                            __('Are you sure you want to delete Vehicle: %s?', $job['Job']['name'])); ?>

                </td>
                </tr>
        <?php
            }
        ?>
    </table>


        </div>
    </div>
</div>
