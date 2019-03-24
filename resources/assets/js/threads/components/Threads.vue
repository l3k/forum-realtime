<template>
    <div class="card">
        <div class="card-content">
            <span class="card-title">{{ titles }}</span>

            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{{ titles }}</th>
                        <th>{{ replies }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Tópico legal vamos puxar no Laravel em RealTime</td>
                        <td>
                            <a href="/threads/1">{{ open }}</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'titles',
            'replies',
            'open'
        ]
    }
</script>
